<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainInfoResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainInfoResponseBody\result\nodeInfoList;
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
    public $bizid;

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
     * @var nodeInfoList[]
     */
    public $nodeInfoList;

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
        'bizid'          => 'Bizid',
        'blockHeight'    => 'BlockHeight',
        'createTime'     => 'CreateTime',
        'isRole'         => 'IsRole',
        'nodeInfoList'   => 'NodeInfoList',
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
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
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
        if (null !== $this->nodeInfoList) {
            $res['NodeInfoList'] = [];
            if (null !== $this->nodeInfoList && \is_array($this->nodeInfoList)) {
                $n = 0;
                foreach ($this->nodeInfoList as $item) {
                    $res['NodeInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
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
        if (isset($map['NodeInfoList'])) {
            if (!empty($map['NodeInfoList'])) {
                $model->nodeInfoList = [];
                $n                   = 0;
                foreach ($map['NodeInfoList'] as $item) {
                    $model->nodeInfoList[$n++] = null !== $item ? nodeInfoList::fromMap($item) : $item;
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
