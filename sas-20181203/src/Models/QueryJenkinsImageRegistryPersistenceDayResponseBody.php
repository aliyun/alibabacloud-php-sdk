<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryJenkinsImageRegistryPersistenceDayResponseBody extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $data;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example EA4AC8B7-0C18-5BC1-9DA4-798B3BE4****
     *
     * @var string
     */
    public $requestId;

    /**
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
     * @return QueryJenkinsImageRegistryPersistenceDayResponseBody
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
