<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageResponseBody\data;

use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageResponseBody\data\dataList\permissions;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example LuQGonyPCRxv793AE6N0rTza
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example AKName
     *
     * @var string
     */
    public $accessKeyName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @example 0
     *
     * @var int
     */
    public $active;

    /**
     * @example 2023-09-21 17:55:21
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-09-21 17:55:21
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example 2023-09-21 17:55:21
     *
     * @var string
     */
    public $lastCallTime;

    /**
     * @var permissions[]
     */
    public $permissions;
    protected $_name = [
        'accessKeyId'     => 'accessKeyId',
        'accessKeyName'   => 'accessKeyName',
        'accessKeySecret' => 'accessKeySecret',
        'active'          => 'active',
        'gmtCreate'       => 'gmtCreate',
        'gmtModify'       => 'gmtModify',
        'lastCallTime'    => 'lastCallTime',
        'permissions'     => 'permissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeyName) {
            $res['accessKeyName'] = $this->accessKeyName;
        }
        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmtModify'] = $this->gmtModify;
        }
        if (null !== $this->lastCallTime) {
            $res['lastCallTime'] = $this->lastCallTime;
        }
        if (null !== $this->permissions) {
            $res['permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['accessKeyName'])) {
            $model->accessKeyName = $map['accessKeyName'];
        }
        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModify'])) {
            $model->gmtModify = $map['gmtModify'];
        }
        if (isset($map['lastCallTime'])) {
            $model->lastCallTime = $map['lastCallTime'];
        }
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
