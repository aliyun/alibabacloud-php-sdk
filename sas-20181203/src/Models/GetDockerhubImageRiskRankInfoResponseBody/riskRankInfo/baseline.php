<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo;

use AlibabaCloud\Tea\Model;

class baseline extends Model
{
    /**
     * @description Image digest value.
     *
     * @example f28ecca63bfaf22ead4b28b63d752a21e4d2c1de90b8549fbde880d619f3****
     *
     * @var string
     */
    public $digest;

    /**
     * @description Number of baseline risks in the image repository.
     *
     * @example 1
     *
     * @var int
     */
    public $hcCount;

    /**
     * @description ID of the image.
     *
     * @example 7c5ad02865aef575387a05bb3c81b27e0d8ed1f2e3f722ea05523b72882f****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image size.
     *
     * @example 1024
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description Name of the container image repository.
     *
     * @example glz123
     *
     * @var string
     */
    public $repoName;

    /**
     * @description Repository namespace.
     *
     * @example namespace-01
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description Risk statistics for hosts, images, and containers.
     *
     * @example {\\"account\\":0,\\"agentlessAll\\":0,\\"agentlessBaseline\\":0,\\"agentlessMalicious\\":0,\\"agentlessSensitiveFile\\":0,\\"agentlessVulCve\\":0,\\"agentlessVulSca\\":0,\\"agentlessVulSys\\":0,\\"appNum\\":0,\\"asapVulCount\\":0,\\"baselineHigh\\":0,\\"baselineLow\\":0,\\"baselineMedium\\":0,\\"baselineNum\\":0,\\"cmsNum\\":0,\\"containerAsap\\":0,\\"containerLater\\":0,\\"containerNntf\\":0,\\"containerRemind\\":0,\\"containerSerious\\":0,\\"containerSuspicious\\":0,\\"cveNum\\":0,\\"emgNum\\":0,\\"health\\":0,\\"imageBaselineHigh\\":1,\\"imageBaselineLow\\":0,\\"imageBaselineMedium\\":0,\\"imageBaselineNum\\":1,\\"imageMaliciousFileRemind\\":0,\\"imageMaliciousFileSerious\\":0,\\"imageMaliciousFileSuspicious\\":0,\\"imageVulAsap\\":0,\\"imageVulLater\\":0,\\"imageVulNntf\\":0,\\"laterVulCount\\":0,\\"newSuspicious\\":0,\\"nntfVulCount\\":0,\\"remindNum\\":0,\\"scaNum\\":0,\\"seriousNum\\":0,\\"suspNum\\":0,\\"suspicious\\":0,\\"sysNum\\":0,\\"trojan\\":0,\\"uuid\\":\\"009635bf00c0585e3122ab92f5449919\\",\\"vul\\":0,\\"weakPWNum\\":0}
     *
     * @var string
     */
    public $riskLevelDetail;

    /**
     * @description Image tag.
     *
     * @example machineResource
     *
     * @var string
     */
    public $tag;

    /**
     * @description Uuid.
     *
     * @example 5583aa03-922e-4709-a888-389f2489****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description Number of detected vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'digest' => 'Digest',
        'hcCount' => 'HcCount',
        'imageId' => 'ImageId',
        'imageSize' => 'ImageSize',
        'repoName' => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'riskLevelDetail' => 'RiskLevelDetail',
        'tag' => 'Tag',
        'uuid' => 'Uuid',
        'vulCount' => 'VulCount',
    ];

    public function validate() {}

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
     * @return baseline
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
