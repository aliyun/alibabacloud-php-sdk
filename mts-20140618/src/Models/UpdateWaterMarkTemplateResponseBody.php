<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateWaterMarkTemplateResponseBody\waterMarkTemplate;

class UpdateWaterMarkTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var waterMarkTemplate
     */
    public $waterMarkTemplate;
    protected $_name = [
        'requestId' => 'RequestId',
        'waterMarkTemplate' => 'WaterMarkTemplate',
    ];

    public function validate()
    {
        if (null !== $this->waterMarkTemplate) {
            $this->waterMarkTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waterMarkTemplate) {
            $res['WaterMarkTemplate'] = null !== $this->waterMarkTemplate ? $this->waterMarkTemplate->toArray($noStream) : $this->waterMarkTemplate;
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

        if (isset($map['WaterMarkTemplate'])) {
            $model->waterMarkTemplate = waterMarkTemplate::fromMap($map['WaterMarkTemplate']);
        }

        return $model;
    }
}
