<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailShrinkRequest;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var string
     */
    public $attachmentUrl;
    protected $_name = [
        'attachmentName' => 'AttachmentName',
        'attachmentUrl' => 'AttachmentUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }

        if (null !== $this->attachmentUrl) {
            $res['AttachmentUrl'] = $this->attachmentUrl;
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
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }

        if (isset($map['AttachmentUrl'])) {
            $model->attachmentUrl = $map['AttachmentUrl'];
        }

        return $model;
    }
}
