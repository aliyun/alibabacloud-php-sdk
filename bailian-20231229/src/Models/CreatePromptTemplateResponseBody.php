<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class CreatePromptTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $promptTemplateId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'promptTemplateId' => 'promptTemplateId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promptTemplateId) {
            $res['promptTemplateId'] = $this->promptTemplateId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['promptTemplateId'])) {
            $model->promptTemplateId = $map['promptTemplateId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
