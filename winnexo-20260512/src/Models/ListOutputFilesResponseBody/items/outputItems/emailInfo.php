<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items\outputItems;

use AlibabaCloud\Dara\Model;

class emailInfo extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string[]
     */
    public $recipients;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'body' => 'body',
        'contentType' => 'contentType',
        'recipients' => 'recipients',
        'subject' => 'subject',
    ];

    public function validate()
    {
        if (\is_array($this->recipients)) {
            Model::validateArray($this->recipients);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->recipients) {
            if (\is_array($this->recipients)) {
                $res['recipients'] = [];
                $n1 = 0;
                foreach ($this->recipients as $item1) {
                    $res['recipients'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['recipients'])) {
            if (!empty($map['recipients'])) {
                $model->recipients = [];
                $n1 = 0;
                foreach ($map['recipients'] as $item1) {
                    $model->recipients[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
