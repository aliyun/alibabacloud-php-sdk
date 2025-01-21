<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceInstanceDiagnosisResponseBody\diagnosis;

class DescribeServiceInstanceDiagnosisResponseBody extends Model
{
    /**
     * @var diagnosis
     */
    public $diagnosis;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosis' => 'Diagnosis',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->diagnosis) {
            $this->diagnosis->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosis) {
            $res['Diagnosis'] = null !== $this->diagnosis ? $this->diagnosis->toArray($noStream) : $this->diagnosis;
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
        if (isset($map['Diagnosis'])) {
            $model->diagnosis = diagnosis::fromMap($map['Diagnosis']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
