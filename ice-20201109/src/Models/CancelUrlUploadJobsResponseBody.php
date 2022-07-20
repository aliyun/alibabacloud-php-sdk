<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CancelUrlUploadJobsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $canceledJobs;

    /**
     * @var string[]
     */
    public $nonExists;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canceledJobs' => 'CanceledJobs',
        'nonExists'    => 'NonExists',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canceledJobs) {
            $res['CanceledJobs'] = $this->canceledJobs;
        }
        if (null !== $this->nonExists) {
            $res['NonExists'] = $this->nonExists;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelUrlUploadJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanceledJobs'])) {
            if (!empty($map['CanceledJobs'])) {
                $model->canceledJobs = $map['CanceledJobs'];
            }
        }
        if (isset($map['NonExists'])) {
            if (!empty($map['NonExists'])) {
                $model->nonExists = $map['NonExists'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
