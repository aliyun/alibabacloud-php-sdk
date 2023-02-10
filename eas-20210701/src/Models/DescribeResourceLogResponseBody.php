<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceLogResponseBody extends Model
{
    /**
     * @example access_log
     *
     * @var string
     */
    public $logStore;

    /**
     * @example Network interfaces are updating
     *
     * @var string
     */
    public $message;

    /**
     * @example eas-r-asdasdasd-sls
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ResourceReady
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'logStore'    => 'LogStore',
        'message'     => 'Message',
        'projectName' => 'ProjectName',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
