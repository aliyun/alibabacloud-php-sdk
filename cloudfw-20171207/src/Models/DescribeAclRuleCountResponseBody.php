<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAclRuleCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $internetInAclCount;

    /**
     * @var int
     */
    public $internetOutAclCount;

    /**
     * @var int
     */
    public $natInAclCount;

    /**
     * @var int
     */
    public $natOutAclCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalAclCount;

    /**
     * @var int
     */
    public $vpcAclCount;
    protected $_name = [
        'internetInAclCount' => 'InternetInAclCount',
        'internetOutAclCount' => 'InternetOutAclCount',
        'natInAclCount' => 'NatInAclCount',
        'natOutAclCount' => 'NatOutAclCount',
        'requestId' => 'RequestId',
        'totalAclCount' => 'TotalAclCount',
        'vpcAclCount' => 'VpcAclCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetInAclCount) {
            $res['InternetInAclCount'] = $this->internetInAclCount;
        }

        if (null !== $this->internetOutAclCount) {
            $res['InternetOutAclCount'] = $this->internetOutAclCount;
        }

        if (null !== $this->natInAclCount) {
            $res['NatInAclCount'] = $this->natInAclCount;
        }

        if (null !== $this->natOutAclCount) {
            $res['NatOutAclCount'] = $this->natOutAclCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalAclCount) {
            $res['TotalAclCount'] = $this->totalAclCount;
        }

        if (null !== $this->vpcAclCount) {
            $res['VpcAclCount'] = $this->vpcAclCount;
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
        if (isset($map['InternetInAclCount'])) {
            $model->internetInAclCount = $map['InternetInAclCount'];
        }

        if (isset($map['InternetOutAclCount'])) {
            $model->internetOutAclCount = $map['InternetOutAclCount'];
        }

        if (isset($map['NatInAclCount'])) {
            $model->natInAclCount = $map['NatInAclCount'];
        }

        if (isset($map['NatOutAclCount'])) {
            $model->natOutAclCount = $map['NatOutAclCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalAclCount'])) {
            $model->totalAclCount = $map['TotalAclCount'];
        }

        if (isset($map['VpcAclCount'])) {
            $model->vpcAclCount = $map['VpcAclCount'];
        }

        return $model;
    }
}
