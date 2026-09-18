<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models;

use AlibabaCloud\Dara\Model;

class GetDistillationTemplateResponseBody extends Model
{
    /**
     * @var DistillationTemplate
     */
    public $distillationTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'distillationTemplate' => 'DistillationTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->distillationTemplate) {
            $this->distillationTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distillationTemplate) {
            $res['DistillationTemplate'] = null !== $this->distillationTemplate ? $this->distillationTemplate->toArray($noStream) : $this->distillationTemplate;
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
        if (isset($map['DistillationTemplate'])) {
            $model->distillationTemplate = DistillationTemplate::fromMap($map['DistillationTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
