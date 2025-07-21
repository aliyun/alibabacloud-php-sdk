<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailRequest;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return attachments
     */
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
