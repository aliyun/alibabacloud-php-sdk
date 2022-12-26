<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulNumStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $appCnt;

    /**
     * @var int
     */
    public $appNum;

    /**
     * @var int
     */
    public $cmsDealedTotalNum;

    /**
     * @var int
     */
    public $cmsNum;

    /**
     * @var int
     */
    public $cveNum;

    /**
     * @var int
     */
    public $emgNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scaNum;

    /**
     * @var int
     */
    public $sysNum;

    /**
     * @var int
     */
    public $vulAsapSum;

    /**
     * @var int
     */
    public $vulDealedTotalNum;

    /**
     * @var int
     */
    public $vulLaterSum;

    /**
     * @var int
     */
    public $vulNntfSum;
    protected $_name = [
        'appCnt'            => 'AppCnt',
        'appNum'            => 'AppNum',
        'cmsDealedTotalNum' => 'CmsDealedTotalNum',
        'cmsNum'            => 'CmsNum',
        'cveNum'            => 'CveNum',
        'emgNum'            => 'EmgNum',
        'requestId'         => 'RequestId',
        'scaNum'            => 'ScaNum',
        'sysNum'            => 'SysNum',
        'vulAsapSum'        => 'VulAsapSum',
        'vulDealedTotalNum' => 'VulDealedTotalNum',
        'vulLaterSum'       => 'VulLaterSum',
        'vulNntfSum'        => 'VulNntfSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCnt) {
            $res['AppCnt'] = $this->appCnt;
        }
        if (null !== $this->appNum) {
            $res['AppNum'] = $this->appNum;
        }
        if (null !== $this->cmsDealedTotalNum) {
            $res['CmsDealedTotalNum'] = $this->cmsDealedTotalNum;
        }
        if (null !== $this->cmsNum) {
            $res['CmsNum'] = $this->cmsNum;
        }
        if (null !== $this->cveNum) {
            $res['CveNum'] = $this->cveNum;
        }
        if (null !== $this->emgNum) {
            $res['EmgNum'] = $this->emgNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaNum) {
            $res['ScaNum'] = $this->scaNum;
        }
        if (null !== $this->sysNum) {
            $res['SysNum'] = $this->sysNum;
        }
        if (null !== $this->vulAsapSum) {
            $res['VulAsapSum'] = $this->vulAsapSum;
        }
        if (null !== $this->vulDealedTotalNum) {
            $res['VulDealedTotalNum'] = $this->vulDealedTotalNum;
        }
        if (null !== $this->vulLaterSum) {
            $res['VulLaterSum'] = $this->vulLaterSum;
        }
        if (null !== $this->vulNntfSum) {
            $res['VulNntfSum'] = $this->vulNntfSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulNumStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCnt'])) {
            $model->appCnt = $map['AppCnt'];
        }
        if (isset($map['AppNum'])) {
            $model->appNum = $map['AppNum'];
        }
        if (isset($map['CmsDealedTotalNum'])) {
            $model->cmsDealedTotalNum = $map['CmsDealedTotalNum'];
        }
        if (isset($map['CmsNum'])) {
            $model->cmsNum = $map['CmsNum'];
        }
        if (isset($map['CveNum'])) {
            $model->cveNum = $map['CveNum'];
        }
        if (isset($map['EmgNum'])) {
            $model->emgNum = $map['EmgNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaNum'])) {
            $model->scaNum = $map['ScaNum'];
        }
        if (isset($map['SysNum'])) {
            $model->sysNum = $map['SysNum'];
        }
        if (isset($map['VulAsapSum'])) {
            $model->vulAsapSum = $map['VulAsapSum'];
        }
        if (isset($map['VulDealedTotalNum'])) {
            $model->vulDealedTotalNum = $map['VulDealedTotalNum'];
        }
        if (isset($map['VulLaterSum'])) {
            $model->vulLaterSum = $map['VulLaterSum'];
        }
        if (isset($map['VulNntfSum'])) {
            $model->vulNntfSum = $map['VulNntfSum'];
        }

        return $model;
    }
}
