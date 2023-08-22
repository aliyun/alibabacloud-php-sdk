<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagRequest extends Model
{
    /**
     * @description The return value of status code.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation that you want to perform. Set the value to **GetRepoTag**.
     *
     * @example crr-tquyps22md8p****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The number of milliseconds that have elapsed since the image was created.
     *
     * @example 1.0
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'repoId'     => 'RepoId',
        'tag'        => 'Tag',
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
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
