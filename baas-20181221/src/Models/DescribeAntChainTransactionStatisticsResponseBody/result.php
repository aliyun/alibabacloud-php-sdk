<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $creatTime;

    /**
     * @var int
     */
    public $transCount;

    /**
     * @var string
     */
    public $dt;

    /**
     * @var int
     */
    public $lastSumBlockHeight;

    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'creatTime'          => 'CreatTime',
        'transCount'         => 'TransCount',
        'dt'                 => 'Dt',
        'lastSumBlockHeight' => 'LastSumBlockHeight',
        'antChainId'         => 'AntChainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatTime) {
            $res['CreatTime'] = $this->creatTime;
        }
        if (null !== $this->transCount) {
            $res['TransCount'] = $this->transCount;
        }
        if (null !== $this->dt) {
            $res['Dt'] = $this->dt;
        }
        if (null !== $this->lastSumBlockHeight) {
            $res['LastSumBlockHeight'] = $this->lastSumBlockHeight;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatTime'])) {
            $model->creatTime = $map['CreatTime'];
        }
        if (isset($map['TransCount'])) {
            $model->transCount = $map['TransCount'];
        }
        if (isset($map['Dt'])) {
            $model->dt = $map['Dt'];
        }
        if (isset($map['LastSumBlockHeight'])) {
            $model->lastSumBlockHeight = $map['LastSumBlockHeight'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
