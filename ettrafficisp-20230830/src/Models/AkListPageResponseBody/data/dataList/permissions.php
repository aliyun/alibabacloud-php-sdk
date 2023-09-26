<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageResponseBody\data\dataList;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @example 2023-09-21 17:55:21
     *
     * @var string
     */
    public $authTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example module
     *
     * @var string
     */
    public $group;

    /**
     * @example eta
     *
     * @var string
     */
    public $permissionCode;

    /**
     * @var string
     */
    public $permissionName;
    protected $_name = [
        'authTime'       => 'authTime',
        'description'    => 'description',
        'group'          => 'group',
        'permissionCode' => 'permissionCode',
        'permissionName' => 'permissionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authTime) {
            $res['authTime'] = $this->authTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->permissionCode) {
            $res['permissionCode'] = $this->permissionCode;
        }
        if (null !== $this->permissionName) {
            $res['permissionName'] = $this->permissionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authTime'])) {
            $model->authTime = $map['authTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['permissionCode'])) {
            $model->permissionCode = $map['permissionCode'];
        }
        if (isset($map['permissionName'])) {
            $model->permissionName = $map['permissionName'];
        }

        return $model;
    }
}
