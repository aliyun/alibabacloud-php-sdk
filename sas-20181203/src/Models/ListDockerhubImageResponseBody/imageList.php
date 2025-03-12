<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListDockerhubImageResponseBody;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @description Image digest value.
     *
     * @example 5ffded22661b0f1e9c7fcccb0d488cff*****f8c52a819bd7179ef3e4a041988
     *
     * @var string
     */
    public $digest;

    /**
     * @description Number of baseline risks.
     *
     * @example 0
     *
     * @var int
     */
    public $hcCount;

    /**
     * @description Image ID.
     *
     * @example d943de1933650d74b415d3ae8b37c064a0e0c700574d7a949c26db3291******
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image size, unit: bytes.
     *
     * @example 1024
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description Repository name.
     *
     * @example python
     *
     * @var string
     */
    public $repoName;

    /**
     * @description Repository namespace.
     *
     * @example python
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description Risk details of the image.
     *
     * @example {"vul":0}
     *
     * @var string
     */
    public $riskLevelDetail;

    /**
     * @description Image tag.
     *
     * @example 3.9
     *
     * @var string
     */
    public $tag;

    /**
     * @description Image UUID.
     *
     * @example a9b50827-801f-414c-900d-c4a223d*****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description Number of detected vulnerabilities.
     *
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return imageList
     */
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
