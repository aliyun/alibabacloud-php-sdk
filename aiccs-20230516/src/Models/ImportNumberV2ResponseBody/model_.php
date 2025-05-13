<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberV2ResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $importNum;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'batchId' => 'BatchId',
        'code' => 'Code',
        'data' => 'Data',
        'importNum' => 'ImportNum',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
