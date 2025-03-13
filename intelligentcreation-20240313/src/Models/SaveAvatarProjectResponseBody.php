<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class SaveAvatarProjectResponseBody extends Model
{
    /**
     * @example 1000222
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 040002
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Failed to proxy flink ui request, message: An error occurred: Invalid UUID string: jobsn
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 812907463682949120
     *
     * @var string
     */
    public $projectId;

    /**
     * @example doc_test_3
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 0E8B1746-AE35-5C4B-A3A8-345B274AE32C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example DRAFT
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'agentId'      => 'agentId',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'errorMsg'     => 'errorMsg',
        'projectId'    => 'projectId',
        'projectName'  => 'projectName',
        'requestId'    => 'requestId',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveAvatarProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
