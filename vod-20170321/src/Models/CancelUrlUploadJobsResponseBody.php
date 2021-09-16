<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CancelUrlUploadJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $canceledJobs;

    /**
     * @var string[]
     */
    public $nonExists;
    protected $_name = [
        'requestId'    => 'RequestId',
        'canceledJobs' => 'CanceledJobs',
        'nonExists'    => 'NonExists',
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
        if (null !== $this->canceledJobs) {
            $res['CanceledJobs'] = $this->canceledJobs;
        }
        if (null !== $this->nonExists) {
            $res['NonExists'] = $this->nonExists;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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

        return $model;
    }
}
