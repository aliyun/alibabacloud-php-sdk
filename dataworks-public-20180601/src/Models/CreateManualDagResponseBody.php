<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class CreateManualDagResponseBody extends Model
{
    /**
     * @example 2d9ce-38ef-4923-baf6-391a7e656
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var string
     */
    public $returnCode;

    /**
     * @example test
     *
     * @var string
     */
    public $returnErrorSolution;

    /**
     * @example test
     *
     * @var string
     */
    public $returnMessage;

    /**
     * @example 1244311235
     *
     * @var int
     */
    public $returnValue;
    protected $_name = [
        'requestId'           => 'RequestId',
        'returnCode'          => 'ReturnCode',
        'returnErrorSolution' => 'ReturnErrorSolution',
        'returnMessage'       => 'ReturnMessage',
        'returnValue'         => 'ReturnValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->returnErrorSolution) {
            $res['ReturnErrorSolution'] = $this->returnErrorSolution;
        }
        if (null !== $this->returnMessage) {
            $res['ReturnMessage'] = $this->returnMessage;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateManualDagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['ReturnErrorSolution'])) {
            $model->returnErrorSolution = $map['ReturnErrorSolution'];
        }
        if (isset($map['ReturnMessage'])) {
            $model->returnMessage = $map['ReturnMessage'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = $map['ReturnValue'];
        }

        return $model;
    }
}
