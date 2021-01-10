<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob;
use AlibabaCloud\Tea\Model;

class SubmitComplexJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var complexJob
     */
    public $complexJob;
    protected $_name = [
        'requestId'  => 'RequestId',
        'complexJob' => 'ComplexJob',
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
        if (null !== $this->complexJob) {
            $res['ComplexJob'] = null !== $this->complexJob ? $this->complexJob->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ComplexJob'])) {
            $model->complexJob = complexJob::fromMap($map['ComplexJob']);
        }

        return $model;
    }
}
