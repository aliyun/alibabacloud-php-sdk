<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AntChainPurposeResponseAli extends Model
{
    /**
     * @var ChainPurposeInfoAli[]
     */
    public $recordList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'recordList' => 'RecordList',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return AntChainPurposeResponseAli
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n                 = 0;
                foreach ($map['RecordList'] as $item) {
                    $model->recordList[$n++] = null !== $item ? ChainPurposeInfoAli::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
