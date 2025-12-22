<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskRequest;

use AlibabaCloud\Dara\Model;

class creationInstruction extends Model
{
    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'instruction' => 'instruction',
        'templateId' => 'templateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
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
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
