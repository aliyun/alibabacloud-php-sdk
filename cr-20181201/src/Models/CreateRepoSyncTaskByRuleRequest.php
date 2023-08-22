<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoSyncTaskByRuleRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-hpdfkc6utbaq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-hnoq7j93or3k****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the synchronization rule.
     *
     * @example crsr-o8n4dijbumgq****
     *
     * @var string
     */
    public $syncRuleId;

    /**
     * @description The version of the image to be synchronized.
     *
     * @example 1.24
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'repoId'     => 'RepoId',
        'syncRuleId' => 'SyncRuleId',
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
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoSyncTaskByRuleRequest
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
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
