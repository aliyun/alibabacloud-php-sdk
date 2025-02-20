<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\fields;

use AlibabaCloud\Dara\Model;

class enumValues extends Model
{
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $enumValue;
    protected $_name = [
        'desc'      => 'desc',
        'enumValue' => 'enumValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->enumValue) {
            $res['enumValue'] = $this->enumValue;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['enumValue'])) {
            $model->enumValue = $map['enumValue'];
        }

        return $model;
    }
}
