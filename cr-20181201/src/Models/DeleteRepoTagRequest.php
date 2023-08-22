<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteRepoTagRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-xwvi3osiy4ff****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The tag of the image.
     *
     * @example 1.24
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
     * @return DeleteRepoTagRequest
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
