<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponseBody\result\nodeInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $abnormalNodes;

    /**
     * @example pYogqb9v
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example 365236
     *
     * @var int
     */
    public $blockHeight;

    /**
     * @example 1562847396000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var nodeInfos[]
     */
    public $nodeInfos;

    /**
     * @example 4
     *
     * @var int
     */
    public $nodeNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $normal;

    /**
     * @example 42
     *
     * @var int
     */
    public $transactionSum;

    /**
     * @example 0.10.2.4.7
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'abnormalNodes'  => 'AbnormalNodes',
        'antChainId'     => 'AntChainId',
        'blockHeight'    => 'BlockHeight',
        'createTime'     => 'CreateTime',
        'nodeInfos'      => 'NodeInfos',
        'nodeNumber'     => 'NodeNumber',
        'normal'         => 'Normal',
        'transactionSum' => 'TransactionSum',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalNodes) {
            $res['AbnormalNodes'] = $this->abnormalNodes;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->nodeInfos) {
            $res['NodeInfos'] = [];
            if (null !== $this->nodeInfos && \is_array($this->nodeInfos)) {
                $n = 0;
                foreach ($this->nodeInfos as $item) {
                    $res['NodeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeNumber) {
            $res['NodeNumber'] = $this->nodeNumber;
        }
        if (null !== $this->normal) {
            $res['Normal'] = $this->normal;
        }
        if (null !== $this->transactionSum) {
            $res['TransactionSum'] = $this->transactionSum;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AbnormalNodes'])) {
            $model->abnormalNodes = $map['AbnormalNodes'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NodeInfos'])) {
            if (!empty($map['NodeInfos'])) {
                $model->nodeInfos = [];
                $n                = 0;
                foreach ($map['NodeInfos'] as $item) {
                    $model->nodeInfos[$n++] = null !== $item ? nodeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeNumber'])) {
            $model->nodeNumber = $map['NodeNumber'];
        }
        if (isset($map['Normal'])) {
            $model->normal = $map['Normal'];
        }
        if (isset($map['TransactionSum'])) {
            $model->transactionSum = $map['TransactionSum'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
