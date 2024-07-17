<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class PrincipalResourcePermissions extends Model
{
    /**
     * @var string[]
     */
    public $accesses;

    /**
     * @var string[]
     */
    public $delegateAccesses;

    /**
     * @description This parameter is required.
     *
     * @var MetaResource
     */
    public $metaResource;

    /**
     * @description This parameter is required.
     *
     * @var Principal
     */
    public $principal;
    protected $_name = [
        'accesses'         => 'Accesses',
        'delegateAccesses' => 'DelegateAccesses',
        'metaResource'     => 'MetaResource',
        'principal'        => 'Principal',
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
        if (null !== $this->delegateAccesses) {
            $res['DelegateAccesses'] = $this->delegateAccesses;
        }
        if (null !== $this->metaResource) {
            $res['MetaResource'] = null !== $this->metaResource ? $this->metaResource->toMap() : null;
        }
        if (null !== $this->principal) {
            $res['Principal'] = null !== $this->principal ? $this->principal->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrincipalResourcePermissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accesses'])) {
            if (!empty($map['Accesses'])) {
                $model->accesses = $map['Accesses'];
            }
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

        return $model;
    }
}
