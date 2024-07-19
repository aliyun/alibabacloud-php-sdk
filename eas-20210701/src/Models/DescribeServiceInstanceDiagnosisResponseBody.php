<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceInstanceDiagnosisResponseBody\diagnosis;
use AlibabaCloud\Tea\Model;

class DescribeServiceInstanceDiagnosisResponseBody extends Model
{
    /**
     * @description The diagnostics information.
     *
     * @var diagnosis
     */
    public $diagnosis;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosis' => 'Diagnosis',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosis) {
            $res['Diagnosis'] = null !== $this->diagnosis ? $this->diagnosis->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceInstanceDiagnosisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Diagnosis'])) {
            $model->diagnosis = diagnosis::fromMap($map['Diagnosis']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
