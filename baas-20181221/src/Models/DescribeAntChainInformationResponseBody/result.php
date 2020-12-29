<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponseBody\result\nodeInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $transactionSum;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $blockHeight;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $nodeNumber;

    /**
     * @var int
     */
    public $abnormalNodes;

    /**
     * @var nodeInfos[]
     */
    public $nodeInfos;

    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var bool
     */
    public $normal;
    protected $_name = [
        'transactionSum' => 'TransactionSum',
        'version'        => 'Version',
        'blockHeight'    => 'BlockHeight',
        'createTime'     => 'CreateTime',
        'nodeNumber'     => 'NodeNumber',
        'abnormalNodes'  => 'AbnormalNodes',
        'nodeInfos'      => 'NodeInfos',
        'antChainId'     => 'AntChainId',
        'normal'         => 'Normal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transactionSum) {
            $res['TransactionSum'] = $this->transactionSum;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->nodeNumber) {
            $res['NodeNumber'] = $this->nodeNumber;
        }
        if (null !== $this->abnormalNodes) {
            $res['AbnormalNodes'] = $this->abnormalNodes;
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
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->normal) {
            $res['Normal'] = $this->normal;
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
        if (isset($map['TransactionSum'])) {
            $model->transactionSum = $map['TransactionSum'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NodeNumber'])) {
            $model->nodeNumber = $map['NodeNumber'];
        }
        if (isset($map['AbnormalNodes'])) {
            $model->abnormalNodes = $map['AbnormalNodes'];
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
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Normal'])) {
            $model->normal = $map['Normal'];
        }

        return $model;
    }
}
