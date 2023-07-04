<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 54
     *
     * @var int
     */
    public $batchId;

    /**
     * @example 94
     *
     * @var int
     */
    public $code;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $data;

    /**
     * @example 26
     *
     * @var int
     */
    public $importNum;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'batchId'   => 'BatchId',
        'code'      => 'Code',
        'data'      => 'Data',
        'importNum' => 'ImportNum',
        'message'   => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->importNum) {
            $res['ImportNum'] = $this->importNum;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ImportNum'])) {
            $model->importNum = $map['ImportNum'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
