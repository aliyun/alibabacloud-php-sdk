<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationNewResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationNewResponseBody\result\nodeInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $abnormalNodes;

    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var int
     */
    public $blockHeight;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isRole;

    /**
     * @var nodeInfos[]
     */
    public $nodeInfos;

    /**
     * @var int
     */
    public $nodeNumber;

    /**
     * @var bool
     */
    public $normal;

    /**
     * @var int
     */
    public $transactionSum;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'abnormalNodes'  => 'AbnormalNodes',
        'antChainId'     => 'AntChainId',
        'blockHeight'    => 'BlockHeight',
        'createTime'     => 'CreateTime',
        'isRole'         => 'IsRole',
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
        if (null !== $this->isRole) {
            $res['IsRole'] = $this->isRole;
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
        if (isset($map['IsRole'])) {
            $model->isRole = $map['IsRole'];
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
