<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobResponseBody\data;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobResponseBody\data\resultList\resultData;
use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var resultData
     */
    public $resultData;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'dataId'     => 'DataId',
        'message'    => 'Message',
        'resultData' => 'ResultData',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->resultData) {
            $res['ResultData'] = null !== $this->resultData ? $this->resultData->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ResultData'])) {
            $model->resultData = resultData::fromMap($map['ResultData']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
