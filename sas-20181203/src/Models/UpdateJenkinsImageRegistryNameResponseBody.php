<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateJenkinsImageRegistryNameResponseBody extends Model
{
    /**
     * @description The result of the operation. Valid values:
     *
     *   **true**: successful
     *   **false**: failed
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4347E985-6E64-467B-96EC-30D4EA9E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time consumed. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'timeCost'       => 'TimeCost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJenkinsImageRegistryNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}
