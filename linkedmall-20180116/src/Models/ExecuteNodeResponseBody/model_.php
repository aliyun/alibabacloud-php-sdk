<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ExecuteNodeResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var mixed[]
     */
    public $responseData;

    /**
     * @var string
     */
    public $processInstanceId;
    protected $_name = [
        'responseData'      => 'ResponseData',
        'processInstanceId' => 'ProcessInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responseData) {
            $res['ResponseData'] = $this->responseData;
        }
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
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
        if (isset($map['ResponseData'])) {
            $model->responseData = $map['ResponseData'];
        }
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        return $model;
    }
}
