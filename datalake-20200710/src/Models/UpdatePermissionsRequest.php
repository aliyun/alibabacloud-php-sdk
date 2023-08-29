<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdatePermissionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $accesses;

    /**
     * @description CatalogId
     *
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var string[]
     */
    public $delegateAccesses;

    /**
     * @var MetaResource
     */
    public $metaResource;

    /**
     * @var Principal
     */
    public $principal;

    /**
     * @example Hive
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accesses'         => 'Accesses',
        'catalogId'        => 'CatalogId',
        'delegateAccesses' => 'DelegateAccesses',
        'metaResource'     => 'MetaResource',
        'principal'        => 'Principal',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accesses) {
            $res['Accesses'] = $this->accesses;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->delegateAccesses) {
            $res['DelegateAccesses'] = $this->delegateAccesses;
        }
        if (null !== $this->metaResource) {
            $res['MetaResource'] = null !== $this->metaResource ? $this->metaResource->toMap() : null;
        }
        if (null !== $this->principal) {
            $res['Principal'] = null !== $this->principal ? $this->principal->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accesses'])) {
            if (!empty($map['Accesses'])) {
                $model->accesses = $map['Accesses'];
            }
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DelegateAccesses'])) {
            if (!empty($map['DelegateAccesses'])) {
                $model->delegateAccesses = $map['DelegateAccesses'];
            }
        }
        if (isset($map['MetaResource'])) {
            $model->metaResource = MetaResource::fromMap($map['MetaResource']);
        }
        if (isset($map['Principal'])) {
            $model->principal = Principal::fromMap($map['Principal']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
