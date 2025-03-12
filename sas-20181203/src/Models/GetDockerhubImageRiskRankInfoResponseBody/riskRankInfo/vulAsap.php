<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo;

use AlibabaCloud\Tea\Model;

class vulAsap extends Model
{
    /**
     * @description Image Digest value.
     *
     * @example d97c1348e56eb52902888e6e5673623321b1f19ac45ed532c3114dc0f989****
     *
     * @var string
     */
    public $digest;

    /**
     * @description Number of risks in the image repository.
     *
     * @example 0
     *
     * @var int
     */
    public $hcCount;

    /**
     * @description Image ID.
     *
     * @example fabe4203a89765a2c99554040bda51eac7885a18216f4ac0be82710cff60****
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
     * @description Name of the image repository.
     *
     * @example lkl-zf-ss-ordapi-labs
     *
     * @var string
     */
    public $repoName;

    /**
     * @description Namespace of the image repository.
     *
     * @example namespace-01
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description Risk statistics for all hosts, images, and containers.
     *
     * @example {\\"account\\":0,\\"agentlessAll\\":0,\\"agentlessBaseline\\":0,\\"agentlessMalicious\\":0,\\"agentlessSensitiveFile\\":0,\\"agentlessVulCve\\":0,\\"agentlessVulSca\\":0,\\"agentlessVulSys\\":0,\\"appNum\\":0,\\"asapVulCount\\":0,\\"baselineHigh\\":0,\\"baselineLow\\":0,\\"baselineMedium\\":0,\\"baselineNum\\":0,\\"cmsNum\\":0,\\"containerAsap\\":0,\\"containerLater\\":0,\\"containerNntf\\":0,\\"containerRemind\\":0,\\"containerSerious\\":0,\\"containerSuspicious\\":0,\\"cveNum\\":513,\\"emgNum\\":0,\\"health\\":0,\\"imageBaselineHigh\\":0,\\"imageBaselineLow\\":0,\\"imageBaselineMedium\\":0,\\"imageBaselineNum\\":0,\\"imageMaliciousFileRemind\\":0,\\"imageMaliciousFileSerious\\":0,\\"imageMaliciousFileSuspicious\\":0,\\"imageVulAsap\\":3,\\"imageVulLater\\":182,\\"imageVulNntf\\":328,\\"laterVulCount\\":0,\\"newSuspicious\\":0,\\"nntfVulCount\\":0,\\"remindNum\\":0,\\"scaNum\\":0,\\"seriousNum\\":0,\\"suspNum\\":0,\\"suspicious\\":0,\\"sysNum\\":0,\\"trojan\\":0,\\"uuid\\":\\"44ffb29d6f66d8509598bcdfa660a21d\\",\\"vul\\":513,\\"weakPWNum\\":0}
     *
     * @var string
     */
    public $riskLevelDetail;

    /**
     * @description Image tag.
     *
     * @example app:app01-ubuntu
     *
     * @var string
     */
    public $tag;

    /**
     * @description The identifier for this record.
     *
     * @example 6636c286-8063-4c97-8508-6aaf16a8****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description Number of vulnerabilities.
     *
     * @example 1
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
     * @return vulAsap
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
