<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Tea\Model;

class monthlySummaryList extends Model
{
    /**
     * @var int
     */
    public $enableDays;

    /**
     * @var int
     */
    public $flowCn;

    /**
     * @var int
     */
    public $flowIntl;

    /**
     * @var int
     */
    public $ipCountCn;

    /**
     * @var int
     */
    public $ipCountIntl;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var int
     */
    public $standardAssetsFlowCn;

    /**
     * @var int
     */
    public $standardAssetsFlowIntl;

    /**
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
