<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models;

use AlibabaCloud\Tea\Model;

class AkGenerateRequest extends Model
{
    /**
     * @example AKName
     *
     * @var string
     */
    public $accessKeyName;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @example userId
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'accessKeyName' => 'accessKeyName',
        'permissions'   => 'permissions',
        'userId'        => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyName) {
            $res['accessKeyName'] = $this->accessKeyName;
        }
        if (null !== $this->permissions) {
            $res['permissions'] = $this->permissions;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AkGenerateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyName'])) {
            $model->accessKeyName = $map['accessKeyName'];
        }
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = $map['permissions'];
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
