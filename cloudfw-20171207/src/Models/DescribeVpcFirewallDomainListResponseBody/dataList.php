<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDomainListResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string[]
     */
    public $applicationNameList;

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
    public $groupName;

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
     * @var int
     */
    public $srcIpCount;

    /**
     * @var int
     */
    public $srcVpcCount;

    /**
     * @var int
     */
    public $totalBytes;
    protected $_name = [
        'applicationNameList' => 'ApplicationNameList',
        'business' => 'Business',
        'domain' => 'Domain',
        'groupName' => 'GroupName',
        'requestBytes' => 'RequestBytes',
        'responseBytes' => 'ResponseBytes',
        'sessionCount' => 'SessionCount',
        'srcIpCount' => 'SrcIpCount',
        'srcVpcCount' => 'SrcVpcCount',
        'totalBytes' => 'TotalBytes',
    ];

    public function validate()
    {
        if (\is_array($this->applicationNameList)) {
            Model::validateArray($this->applicationNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationNameList) {
            if (\is_array($this->applicationNameList)) {
                $res['ApplicationNameList'] = [];
                $n1 = 0;
                foreach ($this->applicationNameList as $item1) {
                    $res['ApplicationNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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

        if (null !== $this->srcIpCount) {
            $res['SrcIpCount'] = $this->srcIpCount;
        }

        if (null !== $this->srcVpcCount) {
            $res['SrcVpcCount'] = $this->srcVpcCount;
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
        if (isset($map['ApplicationNameList'])) {
            if (!empty($map['ApplicationNameList'])) {
                $model->applicationNameList = [];
                $n1 = 0;
                foreach ($map['ApplicationNameList'] as $item1) {
                    $model->applicationNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
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

        if (isset($map['SrcIpCount'])) {
            $model->srcIpCount = $map['SrcIpCount'];
        }

        if (isset($map['SrcVpcCount'])) {
            $model->srcVpcCount = $map['SrcVpcCount'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
