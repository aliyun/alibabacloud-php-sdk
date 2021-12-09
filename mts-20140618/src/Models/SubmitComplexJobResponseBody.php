<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob;
use AlibabaCloud\Tea\Model;

class SubmitComplexJobResponseBody extends Model
{
    /**
     * @var complexJob
     */
    public $complexJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'complexJob' => 'ComplexJob',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complexJob) {
            $res['ComplexJob'] = null !== $this->complexJob ? $this->complexJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitComplexJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplexJob'])) {
            $model->complexJob = complexJob::fromMap($map['ComplexJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
