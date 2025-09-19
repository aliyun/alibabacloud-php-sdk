<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeImageSecurityScanCountRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $imageUuid;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repoInstanceId;

    /**
     * @var string
     */
    public $repoRegionId;

    /**
     * @var string[]
     */
    public $scanRange;

    /**
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dealed' => 'Dealed',
        'imageDigest' => 'ImageDigest',
        'imageTag' => 'ImageTag',
        'imageUuid' => 'ImageUuid',
        'repoId' => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoRegionId' => 'RepoRegionId',
        'scanRange' => 'ScanRange',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->scanRange)) {
            Model::validateArray($this->scanRange);
        }
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }

        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }

        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }

        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }

        if (null !== $this->scanRange) {
            if (\is_array($this->scanRange)) {
                $res['ScanRange'] = [];
                $n1 = 0;
                foreach ($this->scanRange as $item1) {
                    $res['ScanRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }

        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }

        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }

        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }

        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = [];
                $n1 = 0;
                foreach ($map['ScanRange'] as $item1) {
                    $model->scanRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
