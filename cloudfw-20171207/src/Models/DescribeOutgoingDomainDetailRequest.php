<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeOutgoingDomainDetailRequest extends Model
{
    /**
     * @var string
     */
    public $aclCoverage;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $domainList;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'aclCoverage' => 'AclCoverage',
        'currentPage' => 'CurrentPage',
        'domain' => 'Domain',
        'domainList' => 'DomainList',
        'endTime' => 'EndTime',
        'IPType' => 'IPType',
        'lang' => 'Lang',
        'natGatewayId' => 'NatGatewayId',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'privateIP' => 'PrivateIP',
        'publicIP' => 'PublicIP',
        'sort' => 'Sort',
        'sourceIp' => 'SourceIp',
        'startTime' => 'StartTime',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->domainList)) {
            Model::validateArray($this->domainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclCoverage) {
            $res['AclCoverage'] = $this->aclCoverage;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainList) {
            if (\is_array($this->domainList)) {
                $res['DomainList'] = [];
                $n1 = 0;
                foreach ($this->domainList as $item1) {
                    $res['DomainList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['AclCoverage'])) {
            $model->aclCoverage = $map['AclCoverage'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n1 = 0;
                foreach ($map['DomainList'] as $item1) {
                    $model->domainList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
