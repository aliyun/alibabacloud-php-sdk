<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponseBody\onceTasks;

use AlibabaCloud\Tea\Model;

class taskImageInfo extends Model
{
    /**
     * @example 9e0dc29d872d2e386cc5c0c92b529a84e3acfade16f5cb1d054a2ee3c99****
     *
     * @var string
     */
    public $digest;

    /**
     * @example ***s.com/sas_test/baseli***
     *
     * @var string
     */
    public $image;

    /**
     * @example expoit-law-****
     *
     * @var string
     */
    public $pod;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example crr-r88w2vryp8m****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example testyyy
     *
     * @var string
     */
    public $repoName;

    /**
     * @example bitn***
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @example v1.20-002-a2*****
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'        => 'Digest',
        'image'         => 'Image',
        'pod'           => 'Pod',
        'regionId'      => 'RegionId',
        'repoId'        => 'RepoId',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'repoRegionId'  => 'RepoRegionId',
        'tag'           => 'Tag',
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
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskImageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
