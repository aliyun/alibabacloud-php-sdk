<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class CreateFineTuneJobResponseBody extends Model
{
    /**
     * @example ft-202307181110-146c93bf
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 7BA8ADD9-53D6-53F0-918F-A1E776AD230E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example - SUCCESSED
     * - CANCELED
     * @var string
     */
    public $status;
    protected $_name = [
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
     * @return CreateFineTuneJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
