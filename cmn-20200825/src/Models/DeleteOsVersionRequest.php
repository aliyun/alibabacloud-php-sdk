<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteOsVersionRequest extends Model
{
    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example osVersionId
     *
     * @var string
     */
    public $osVersionId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'osVersionId' => 'OsVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->osVersionId) {
            $res['OsVersionId'] = $this->osVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOsVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OsVersionId'])) {
            $model->osVersionId = $map['OsVersionId'];
        }

        return $model;
    }
}
