<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo;

use AlibabaCloud\Dara\Model;

class vulAsap extends Model
{
    /**
     * @var string
     */
    public $digest;
    /**
     * @var int
     */
    public $hcCount;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var int
     */
    public $imageSize;
    /**
     * @var string
     */
    public $repoName;
    /**
     * @var string
     */
    public $repoNamespace;
    /**
     * @var string
     */
    public $riskLevelDetail;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'digest'          => 'Digest',
        'hcCount'         => 'HcCount',
        'imageId'         => 'ImageId',
        'imageSize'       => 'ImageSize',
        'repoName'        => 'RepoName',
        'repoNamespace'   => 'RepoNamespace',
        'riskLevelDetail' => 'RiskLevelDetail',
        'tag'             => 'Tag',
        'uuid'            => 'Uuid',
        'vulCount'        => 'VulCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }

        if (null !== $this->hcCount) {
            $res['HcCount'] = $this->hcCount;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }

        if (null !== $this->riskLevelDetail) {
            $res['RiskLevelDetail'] = $this->riskLevelDetail;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
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
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }

        if (isset($map['HcCount'])) {
            $model->hcCount = $map['HcCount'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }

        if (isset($map['RiskLevelDetail'])) {
            $model->riskLevelDetail = $map['RiskLevelDetail'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
