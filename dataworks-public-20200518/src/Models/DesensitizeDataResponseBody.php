<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DesensitizeDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $desensitizeData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desensitizeData' => 'DesensitizeData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensitizeData) {
            $res['DesensitizeData'] = $this->desensitizeData;
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
        if (isset($map['DesensitizeData'])) {
            $model->desensitizeData = $map['DesensitizeData'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
