<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeFirewallDropStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $aclDropCnt;

    /**
     * @var int
     */
    public $ipsDropCnt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalDropCnt;

    /**
     * @var int
     */
    public $vulnDropCnt;
    protected $_name = [
        'aclDropCnt' => 'AclDropCnt',
        'ipsDropCnt' => 'IpsDropCnt',
        'requestId' => 'RequestId',
        'totalDropCnt' => 'TotalDropCnt',
        'vulnDropCnt' => 'VulnDropCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclDropCnt) {
            $res['AclDropCnt'] = $this->aclDropCnt;
        }

        if (null !== $this->ipsDropCnt) {
            $res['IpsDropCnt'] = $this->ipsDropCnt;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalDropCnt) {
            $res['TotalDropCnt'] = $this->totalDropCnt;
        }

        if (null !== $this->vulnDropCnt) {
            $res['VulnDropCnt'] = $this->vulnDropCnt;
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
        if (isset($map['AclDropCnt'])) {
            $model->aclDropCnt = $map['AclDropCnt'];
        }

        if (isset($map['IpsDropCnt'])) {
            $model->ipsDropCnt = $map['IpsDropCnt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalDropCnt'])) {
            $model->totalDropCnt = $map['TotalDropCnt'];
        }

        if (isset($map['VulnDropCnt'])) {
            $model->vulnDropCnt = $map['VulnDropCnt'];
        }

        return $model;
    }
}
