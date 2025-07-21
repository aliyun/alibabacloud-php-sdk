<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SingleSendMailAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class attachments extends Model
{
    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var Stream
     */
    public $attachmentUrlObject;
    protected $_name = [
        'attachmentName' => 'AttachmentName',
        'attachmentUrlObject' => 'AttachmentUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->attachmentUrlObject) {
            $res['AttachmentUrl'] = $this->attachmentUrlObject;
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
            $model->attachmentUrlObject = $map['AttachmentUrl'];
        }

        return $model;
    }
}
