<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Tea\Model;

class monthlySummaryList extends Model
{
    /**
     * @description The number of days that the instance is activated.
     *
     * @example 30
     *
     * @var int
     */
    public $enableDays;

    /**
     * @description The total traffic of EIPs with Anti-DDoS (Enhanced) enabled in the Chinese mainland. Unit: bytes.
     *
     * @example 123456
     *
     * @var int
     */
    public $flowCn;

    /**
     * @description The total traffic of EIPs with Anti-DDoS (Enhanced) enabled outside the Chinese mainland. Unit: bytes.
     *
     * @example 123456
     *
     * @var int
     */
    public $flowIntl;

    /**
     * @description The total number of protected IP addresses in the Chinese mainland.
     *
     * >  The total number of protected IP addresses is the sum of the daily numbers of protected IP addresses in a month.
     * @example 28
     *
     * @var int
     */
    public $ipCountCn;

    /**
     * @description The total number of protected IP addresses outside the Chinese mainland.
     *
     * >  The total number of protected IP addresses is the sum of the daily numbers of protected IP addresses in a month.
     * @example 30
     *
     * @var int
     */
    public $ipCountIntl;

    /**
     * @description The ID of the member.
     *
     * @example 112873971277****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The total traffic of regular Alibaba Cloud services in the Chinese mainland. Unit: bytes.
     *
     * @example 123456
     *
     * @var int
     */
    public $standardAssetsFlowCn;

    /**
     * @description The total traffic of regular Alibaba Cloud services outside the Chinese mainland. Unit: bytes.
     *
     * @example 123456
     *
     * @var int
     */
    public $standardAssetsFlowIntl;

    /**
     * @description The ID of the administrator account.
     *
     * @example 102518028277****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'enableDays'             => 'EnableDays',
        'flowCn'                 => 'FlowCn',
        'flowIntl'               => 'FlowIntl',
        'ipCountCn'              => 'IpCountCn',
        'ipCountIntl'            => 'IpCountIntl',
        'memberUid'              => 'MemberUid',
        'standardAssetsFlowCn'   => 'StandardAssetsFlowCn',
        'standardAssetsFlowIntl' => 'StandardAssetsFlowIntl',
        'uid'                    => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableDays) {
            $res['EnableDays'] = $this->enableDays;
        }
        if (null !== $this->flowCn) {
            $res['FlowCn'] = $this->flowCn;
        }
        if (null !== $this->flowIntl) {
            $res['FlowIntl'] = $this->flowIntl;
        }
        if (null !== $this->ipCountCn) {
            $res['IpCountCn'] = $this->ipCountCn;
        }
        if (null !== $this->ipCountIntl) {
            $res['IpCountIntl'] = $this->ipCountIntl;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->standardAssetsFlowCn) {
            $res['StandardAssetsFlowCn'] = $this->standardAssetsFlowCn;
        }
        if (null !== $this->standardAssetsFlowIntl) {
            $res['StandardAssetsFlowIntl'] = $this->standardAssetsFlowIntl;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monthlySummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableDays'])) {
            $model->enableDays = $map['EnableDays'];
        }
        if (isset($map['FlowCn'])) {
            $model->flowCn = $map['FlowCn'];
        }
        if (isset($map['FlowIntl'])) {
            $model->flowIntl = $map['FlowIntl'];
        }
        if (isset($map['IpCountCn'])) {
            $model->ipCountCn = $map['IpCountCn'];
        }
        if (isset($map['IpCountIntl'])) {
            $model->ipCountIntl = $map['IpCountIntl'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['StandardAssetsFlowCn'])) {
            $model->standardAssetsFlowCn = $map['StandardAssetsFlowCn'];
        }
        if (isset($map['StandardAssetsFlowIntl'])) {
            $model->standardAssetsFlowIntl = $map['StandardAssetsFlowIntl'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
