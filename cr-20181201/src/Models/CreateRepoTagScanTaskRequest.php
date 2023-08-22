<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoTagScanTaskRequest extends Model
{
    /**
     * @description The digest of the image.
     *
     * @example sha256:815386ebbe9a3490f38785ab11bda34ec8dacf4634af77b8912832d4f85dca04
     *
     * @var string
     */
    public $digest;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
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
     * @description The type of the scanning engine.
     *
     *   `SAS_SCAN_SERVICE`: Security Center scan engine (paid service)
     *   `ACR_SCAN_SERVICE`: Container Registry scan engine
     *
     * @example ACR_SCAN_SERVICE
     *
     * @var string
     */
    public $scanService;

    /**
     * @description The version of the image.
     *
     * @example 1.24
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'      => 'Digest',
        'instanceId'  => 'InstanceId',
        'repoId'      => 'RepoId',
        'scanService' => 'ScanService',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->scanService) {
            $res['ScanService'] = $this->scanService;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoTagScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['ScanService'])) {
            $model->scanService = $map['ScanService'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
