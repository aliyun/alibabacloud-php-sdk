<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponseBody\qosGroupInfo;

use AlibabaCloud\Tea\Model;

class qosGroup extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $qosGroupName;

    /**
     * @var string
     */
    public $rx;

    /**
     * @var string
     */
    public $rxPps;

    /**
     * @var string
     */
    public $tx;

    /**
     * @var string
     */
    public $txPps;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'gmtModify'    => 'GmtModify',
        'qosGroupName' => 'QosGroupName',
        'rx'           => 'Rx',
        'rxPps'        => 'RxPps',
        'tx'           => 'Tx',
        'txPps'        => 'TxPps',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->qosGroupName) {
            $res['QosGroupName'] = $this->qosGroupName;
        }
        if (null !== $this->rx) {
            $res['Rx'] = $this->rx;
        }
        if (null !== $this->rxPps) {
            $res['RxPps'] = $this->rxPps;
        }
        if (null !== $this->tx) {
            $res['Tx'] = $this->tx;
        }
        if (null !== $this->txPps) {
            $res['TxPps'] = $this->txPps;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['QosGroupName'])) {
            $model->qosGroupName = $map['QosGroupName'];
        }
        if (isset($map['Rx'])) {
            $model->rx = $map['Rx'];
        }
        if (isset($map['RxPps'])) {
            $model->rxPps = $map['RxPps'];
        }
        if (isset($map['Tx'])) {
            $model->tx = $map['Tx'];
        }
        if (isset($map['TxPps'])) {
            $model->txPps = $map['TxPps'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
