<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDomainRelationListResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $dstRegionId;

    /**
     * @var string
     */
    public $dstVpcId;

    /**
     * @var string
     */
    public $dstVpcName;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $ipsHitCnt;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var int
     */
    public $requestBytes;

    /**
     * @var int
     */
    public $responseBytes;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $srcRegionId;

    /**
     * @var string
     */
    public $srcVpcId;

    /**
     * @var string
     */
    public $srcVpcName;

    /**
     * @var int
     */
    public $totalBytes;
    protected $_name = [
        'business' => 'Business',
        'domain' => 'Domain',
        'dstIP' => 'DstIP',
        'dstRegionId' => 'DstRegionId',
        'dstVpcId' => 'DstVpcId',
        'dstVpcName' => 'DstVpcName',
        'firstTime' => 'FirstTime',
        'groupName' => 'GroupName',
        'ipsHitCnt' => 'IpsHitCnt',
        'lastTime' => 'LastTime',
        'requestBytes' => 'RequestBytes',
        'responseBytes' => 'ResponseBytes',
        'sessionCount' => 'SessionCount',
        'srcIP' => 'SrcIP',
        'srcRegionId' => 'SrcRegionId',
        'srcVpcId' => 'SrcVpcId',
        'srcVpcName' => 'SrcVpcName',
        'totalBytes' => 'TotalBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->dstRegionId) {
            $res['DstRegionId'] = $this->dstRegionId;
        }

        if (null !== $this->dstVpcId) {
            $res['DstVpcId'] = $this->dstVpcId;
        }

        if (null !== $this->dstVpcName) {
            $res['DstVpcName'] = $this->dstVpcName;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->ipsHitCnt) {
            $res['IpsHitCnt'] = $this->ipsHitCnt;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->requestBytes) {
            $res['RequestBytes'] = $this->requestBytes;
        }

        if (null !== $this->responseBytes) {
            $res['ResponseBytes'] = $this->responseBytes;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->srcRegionId) {
            $res['SrcRegionId'] = $this->srcRegionId;
        }

        if (null !== $this->srcVpcId) {
            $res['SrcVpcId'] = $this->srcVpcId;
        }

        if (null !== $this->srcVpcName) {
            $res['SrcVpcName'] = $this->srcVpcName;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
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
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['DstRegionId'])) {
            $model->dstRegionId = $map['DstRegionId'];
        }

        if (isset($map['DstVpcId'])) {
            $model->dstVpcId = $map['DstVpcId'];
        }

        if (isset($map['DstVpcName'])) {
            $model->dstVpcName = $map['DstVpcName'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IpsHitCnt'])) {
            $model->ipsHitCnt = $map['IpsHitCnt'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['RequestBytes'])) {
            $model->requestBytes = $map['RequestBytes'];
        }

        if (isset($map['ResponseBytes'])) {
            $model->responseBytes = $map['ResponseBytes'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['SrcRegionId'])) {
            $model->srcRegionId = $map['SrcRegionId'];
        }

        if (isset($map['SrcVpcId'])) {
            $model->srcVpcId = $map['SrcVpcId'];
        }

        if (isset($map['SrcVpcName'])) {
            $model->srcVpcName = $map['SrcVpcName'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
