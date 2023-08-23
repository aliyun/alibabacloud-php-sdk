<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail\firstDialogueTemplate;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail\secondDialogueTemplate;
use AlibabaCloud\Tea\Model;

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
        'firstDialogueTemplate'  => 'FirstDialogueTemplate',
        'secondDialogueTemplate' => 'SecondDialogueTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstDialogueTemplate) {
            $res['FirstDialogueTemplate'] = null !== $this->firstDialogueTemplate ? $this->firstDialogueTemplate->toMap() : null;
        }
        if (null !== $this->secondDialogueTemplate) {
            $res['SecondDialogueTemplate'] = null !== $this->secondDialogueTemplate ? $this->secondDialogueTemplate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateDetail
     */
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
