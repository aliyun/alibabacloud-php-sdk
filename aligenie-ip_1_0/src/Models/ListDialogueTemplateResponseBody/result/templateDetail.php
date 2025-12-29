<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail\firstDialogueTemplate;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail\secondDialogueTemplate;

class templateDetail extends Model
{
    /**
     * @var firstDialogueTemplate
     */
    public $firstDialogueTemplate;

    /**
     * @var secondDialogueTemplate
     */
    public $secondDialogueTemplate;
    protected $_name = [
        'firstDialogueTemplate' => 'FirstDialogueTemplate',
        'secondDialogueTemplate' => 'SecondDialogueTemplate',
    ];

    public function validate()
    {
        if (null !== $this->firstDialogueTemplate) {
            $this->firstDialogueTemplate->validate();
        }
        if (null !== $this->secondDialogueTemplate) {
            $this->secondDialogueTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstDialogueTemplate) {
            $res['FirstDialogueTemplate'] = null !== $this->firstDialogueTemplate ? $this->firstDialogueTemplate->toArray($noStream) : $this->firstDialogueTemplate;
        }

        if (null !== $this->secondDialogueTemplate) {
            $res['SecondDialogueTemplate'] = null !== $this->secondDialogueTemplate ? $this->secondDialogueTemplate->toArray($noStream) : $this->secondDialogueTemplate;
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
        if (isset($map['FirstDialogueTemplate'])) {
            $model->firstDialogueTemplate = firstDialogueTemplate::fromMap($map['FirstDialogueTemplate']);
        }

        if (isset($map['SecondDialogueTemplate'])) {
            $model->secondDialogueTemplate = secondDialogueTemplate::fromMap($map['SecondDialogueTemplate']);
        }

        return $model;
    }
}
