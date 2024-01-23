<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody\DBTopology;
use AlibabaCloud\Tea\Model;

class GetDBTopologyResponseBody extends Model
{
    /**
     * @description The topology of the data table.
     *
     * @var DBTopology
     */
    public $DBTopology;

    /**
     * @description The error code.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example C5B8E84B-42B6-4374-AD5A-6264E1753378
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: The request is successful.
     *   **false**: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'DBTopology'   => 'DBTopology',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTopology) {
            $res['DBTopology'] = null !== $this->DBTopology ? $this->DBTopology->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDBTopologyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTopology'])) {
            $model->DBTopology = DBTopology::fromMap($map['DBTopology']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
