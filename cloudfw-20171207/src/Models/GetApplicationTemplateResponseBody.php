<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\GetApplicationTemplateResponseBody\applicationTemplate;

class GetApplicationTemplateResponseBody extends Model
{
    /**
     * @var applicationTemplate
     */
    public $applicationTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationTemplate' => 'ApplicationTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationTemplate) {
            $this->applicationTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTemplate) {
            $res['ApplicationTemplate'] = null !== $this->applicationTemplate ? $this->applicationTemplate->toArray($noStream) : $this->applicationTemplate;
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
        if (isset($map['ApplicationTemplate'])) {
            $model->applicationTemplate = applicationTemplate::fromMap($map['ApplicationTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
