<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeHighDefinationMonitorResponseBody extends Model
{
    /**
     * @description The name of the Log Service project.
     *
     * @example my-project
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The name of the Logstore.
     *
     * @example my-log-store
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The request ID.
     *
     * @example 2F398FF5-B349-5C01-8638-8E9A0BF1DBE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'logProject' => 'LogProject',
        'logStore'   => 'LogStore',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
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
     * @return DescribeHighDefinationMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
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
