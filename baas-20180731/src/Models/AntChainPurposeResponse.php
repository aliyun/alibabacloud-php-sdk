<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AntChainPurposeResponse extends Model
{
    /**
     * @var string
     */
    public $chainPurposeExtend;

    /**
     * @var string
     */
    public $chainPurposeItem;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $purpose;

    /**
     * @var ChainPurpose[]
     */
    public $recordList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chainPurposeExtend' => 'ChainPurposeExtend',
        'chainPurposeItem'   => 'ChainPurposeItem',
        'createTime'         => 'CreateTime',
        'purpose'            => 'Purpose',
        'recordList'         => 'RecordList',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainPurposeExtend) {
            $res['ChainPurposeExtend'] = $this->chainPurposeExtend;
        }
        if (null !== $this->chainPurposeItem) {
            $res['ChainPurposeItem'] = $this->chainPurposeItem;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->purpose) {
            $res['Purpose'] = $this->purpose;
        }
        if (null !== $this->recordList) {
            $res['RecordList'] = [];
            if (null !== $this->recordList && \is_array($this->recordList)) {
                $n = 0;
                foreach ($this->recordList as $item) {
                    $res['RecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AntChainPurposeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainPurposeExtend'])) {
            $model->chainPurposeExtend = $map['ChainPurposeExtend'];
        }
        if (isset($map['ChainPurposeItem'])) {
            $model->chainPurposeItem = $map['ChainPurposeItem'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Purpose'])) {
            $model->purpose = $map['Purpose'];
        }
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n                 = 0;
                foreach ($map['RecordList'] as $item) {
                    $model->recordList[$n++] = null !== $item ? ChainPurpose::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
