<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models;

use AlibabaCloud\Tea\Model;

class AkUpdateRequest extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @example AKname
     *
     * @var string
     */
    public $accessKeyName;

    /**
     * @var string[]
     */
    public $permissions;
    protected $_name = [
        'accessKeyId'   => 'accessKeyId',
        'accessKeyName' => 'accessKeyName',
        'permissions'   => 'permissions',
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
        if (null !== $this->permissions) {
            $res['permissions'] = $this->permissions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AkUpdateRequest
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
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = $map['permissions'];
            }
        }

        return $model;
    }
}
