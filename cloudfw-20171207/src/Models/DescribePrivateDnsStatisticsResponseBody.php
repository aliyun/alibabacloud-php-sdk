<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsStatisticsResponseBody\privateDnsRegionList;

class DescribePrivateDnsStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $abnormalPrivateDnsCount;

    /**
     * @var int
     */
    public $createdPrivateDnsCount;

    /**
     * @var int
     */
    public $domainNameTotalCount;

    /**
     * @var int
     */
    public $newDomainNameTotalCount;

    /**
     * @var int
     */
    public $normalPrivateDnsCount;

    /**
     * @var privateDnsRegionList[]
     */
    public $privateDnsRegionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormalPrivateDnsCount' => 'AbnormalPrivateDnsCount',
        'createdPrivateDnsCount' => 'CreatedPrivateDnsCount',
        'domainNameTotalCount' => 'DomainNameTotalCount',
        'newDomainNameTotalCount' => 'NewDomainNameTotalCount',
        'normalPrivateDnsCount' => 'NormalPrivateDnsCount',
        'privateDnsRegionList' => 'PrivateDnsRegionList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->privateDnsRegionList)) {
            Model::validateArray($this->privateDnsRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalPrivateDnsCount) {
            $res['AbnormalPrivateDnsCount'] = $this->abnormalPrivateDnsCount;
        }

        if (null !== $this->createdPrivateDnsCount) {
            $res['CreatedPrivateDnsCount'] = $this->createdPrivateDnsCount;
        }

        if (null !== $this->domainNameTotalCount) {
            $res['DomainNameTotalCount'] = $this->domainNameTotalCount;
        }

        if (null !== $this->newDomainNameTotalCount) {
            $res['NewDomainNameTotalCount'] = $this->newDomainNameTotalCount;
        }

        if (null !== $this->normalPrivateDnsCount) {
            $res['NormalPrivateDnsCount'] = $this->normalPrivateDnsCount;
        }

        if (null !== $this->privateDnsRegionList) {
            if (\is_array($this->privateDnsRegionList)) {
                $res['PrivateDnsRegionList'] = [];
                $n1 = 0;
                foreach ($this->privateDnsRegionList as $item1) {
                    $res['PrivateDnsRegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AbnormalPrivateDnsCount'])) {
            $model->abnormalPrivateDnsCount = $map['AbnormalPrivateDnsCount'];
        }

        if (isset($map['CreatedPrivateDnsCount'])) {
            $model->createdPrivateDnsCount = $map['CreatedPrivateDnsCount'];
        }

        if (isset($map['DomainNameTotalCount'])) {
            $model->domainNameTotalCount = $map['DomainNameTotalCount'];
        }

        if (isset($map['NewDomainNameTotalCount'])) {
            $model->newDomainNameTotalCount = $map['NewDomainNameTotalCount'];
        }

        if (isset($map['NormalPrivateDnsCount'])) {
            $model->normalPrivateDnsCount = $map['NormalPrivateDnsCount'];
        }

        if (isset($map['PrivateDnsRegionList'])) {
            if (!empty($map['PrivateDnsRegionList'])) {
                $model->privateDnsRegionList = [];
                $n1 = 0;
                foreach ($map['PrivateDnsRegionList'] as $item1) {
                    $model->privateDnsRegionList[$n1] = privateDnsRegionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
