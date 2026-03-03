<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\AguiMessage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AguiMessage\metadata\attachments;

class metadata extends Model
{
    /**
     * @var attachments
     */
    public $attachments;
    protected $_name = [
        'attachments' => 'Attachments',
    ];

    public function validate()
    {
        if (null !== $this->attachments) {
            $this->attachments->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            $res['Attachments'] = null !== $this->attachments ? $this->attachments->toArray($noStream) : $this->attachments;
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
        if (isset($map['Attachments'])) {
            $model->attachments = attachments::fromMap($map['Attachments']);
        }

        return $model;
    }
}
