<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ExecuteNodeResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var mixed[]
     */
    public $responseData;
    protected $_name = [
        'processInstanceId' => 'ProcessInstanceId',
        'responseData'      => 'ResponseData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->responseData) {
            $res['ResponseData'] = $this->responseData;
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
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['ResponseData'])) {
            $model->responseData = $map['ResponseData'];
        }

        return $model;
    }
}
