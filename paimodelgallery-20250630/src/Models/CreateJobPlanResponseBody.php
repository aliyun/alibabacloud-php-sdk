<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;

class CreateJobPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobPlanId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobPlanId' => 'JobPlanId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobPlanId) {
            $res['JobPlanId'] = $this->jobPlanId;
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
        if (isset($map['JobPlanId'])) {
            $model->jobPlanId = $map['JobPlanId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
