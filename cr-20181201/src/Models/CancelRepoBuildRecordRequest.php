<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CancelRepoBuildRecordRequest extends Model
{
    /**
     * @description The ID of the image building record.
     *
     * @example 74FDBA62-30C0-4F22-BE7B-F1D36FD1****
     *
     * @var string
     */
    public $buildRecordId;

    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-tquyps22md8p****
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildRecordId' => 'BuildRecordId',
        'instanceId'    => 'InstanceId',
        'repoId'        => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelRepoBuildRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
