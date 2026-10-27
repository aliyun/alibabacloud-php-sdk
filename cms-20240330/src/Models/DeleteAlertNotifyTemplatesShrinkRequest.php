<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertNotifyTemplatesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertNotifyTemplateIdsShrink;
    protected $_name = [
        'alertNotifyTemplateIdsShrink' => 'alertNotifyTemplateIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNotifyTemplateIdsShrink) {
            $res['alertNotifyTemplateIds'] = $this->alertNotifyTemplateIdsShrink;
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
        if (isset($map['alertNotifyTemplateIds'])) {
            $model->alertNotifyTemplateIdsShrink = $map['alertNotifyTemplateIds'];
        }

        return $model;
    }
}
