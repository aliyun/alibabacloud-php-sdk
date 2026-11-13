<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateWebFilterTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $webFilterTemplateId;
    protected $_name = [
        'requestId' => 'RequestId',
        'webFilterTemplateId' => 'WebFilterTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webFilterTemplateId) {
            $res['WebFilterTemplateId'] = $this->webFilterTemplateId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WebFilterTemplateId'])) {
            $model->webFilterTemplateId = $map['WebFilterTemplateId'];
        }

        return $model;
    }
}
