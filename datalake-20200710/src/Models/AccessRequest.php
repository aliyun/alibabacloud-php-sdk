<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class AccessRequest extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var Principal
     */
    public $principal;

    /**
     * @var PrivilegeResource[]
     */
    public $privilegeResources;
    protected $_name = [
        'catalogId'          => 'CatalogId',
        'principal'          => 'Principal',
        'privilegeResources' => 'PrivilegeResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->principal) {
            $res['Principal'] = null !== $this->principal ? $this->principal->toMap() : null;
        }
        if (null !== $this->privilegeResources) {
            $res['PrivilegeResources'] = [];
            if (null !== $this->privilegeResources && \is_array($this->privilegeResources)) {
                $n = 0;
                foreach ($this->privilegeResources as $item) {
                    $res['PrivilegeResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['Principal'])) {
            $model->principal = Principal::fromMap($map['Principal']);
        }
        if (isset($map['PrivilegeResources'])) {
            if (!empty($map['PrivilegeResources'])) {
                $model->privilegeResources = [];
                $n                         = 0;
                foreach ($map['PrivilegeResources'] as $item) {
                    $model->privilegeResources[$n++] = null !== $item ? PrivilegeResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
