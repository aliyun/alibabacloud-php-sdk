<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oms\V20160615\Models;

use AlibabaCloud\Dara\Model;

class GetIncrementMeasureDataByProxyRequest extends Model
{
    /**
     * @var bool
     */
    public $compressEnable;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var int
     */
    public $modifyEndTime;

    /**
     * @var int
     */
    public $modifyStartTime;

    /**
     * @var string
     */
    public $rowKeyMapStr;
    protected $_name = [
        'compressEnable' => 'CompressEnable',
        'dataType' => 'DataType',
        'domainCode' => 'DomainCode',
        'modifyEndTime' => 'ModifyEndTime',
        'modifyStartTime' => 'ModifyStartTime',
        'rowKeyMapStr' => 'RowKeyMapStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compressEnable) {
            $res['CompressEnable'] = $this->compressEnable;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->modifyEndTime) {
            $res['ModifyEndTime'] = $this->modifyEndTime;
        }

        if (null !== $this->modifyStartTime) {
            $res['ModifyStartTime'] = $this->modifyStartTime;
        }

        if (null !== $this->rowKeyMapStr) {
            $res['RowKeyMapStr'] = $this->rowKeyMapStr;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressEnable'])) {
            $model->compressEnable = $map['CompressEnable'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['ModifyEndTime'])) {
            $model->modifyEndTime = $map['ModifyEndTime'];
        }

        if (isset($map['ModifyStartTime'])) {
            $model->modifyStartTime = $map['ModifyStartTime'];
        }

        if (isset($map['RowKeyMapStr'])) {
            $model->rowKeyMapStr = $map['RowKeyMapStr'];
        }

        return $model;
    }
}
