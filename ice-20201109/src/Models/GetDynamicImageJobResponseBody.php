<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob;

class GetDynamicImageJobResponseBody extends Model
{
    /**
     * @var dynamicImageJob
     */
    public $dynamicImageJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicImageJob' => 'DynamicImageJob',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dynamicImageJob) {
            $this->dynamicImageJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicImageJob) {
            $res['DynamicImageJob'] = null !== $this->dynamicImageJob ? $this->dynamicImageJob->toArray($noStream) : $this->dynamicImageJob;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicImageJob'])) {
            $model->dynamicImageJob = dynamicImageJob::fromMap($map['DynamicImageJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
