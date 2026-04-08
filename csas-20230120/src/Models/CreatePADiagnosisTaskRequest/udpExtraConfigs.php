<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskRequest;

use AlibabaCloud\Dara\Model;

class udpExtraConfigs extends Model
{
    /**
     * @var string
     */
    public $expectedResponse;

    /**
     * @var string
     */
    public $requestContent;
    protected $_name = [
        'expectedResponse' => 'ExpectedResponse',
        'requestContent' => 'RequestContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectedResponse) {
            $res['ExpectedResponse'] = $this->expectedResponse;
        }

        if (null !== $this->requestContent) {
            $res['RequestContent'] = $this->requestContent;
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
        if (isset($map['ExpectedResponse'])) {
            $model->expectedResponse = $map['ExpectedResponse'];
        }

        if (isset($map['RequestContent'])) {
            $model->requestContent = $map['RequestContent'];
        }

        return $model;
    }
}
