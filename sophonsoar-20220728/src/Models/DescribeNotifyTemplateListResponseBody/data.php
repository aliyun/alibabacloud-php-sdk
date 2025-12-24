<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNotifyTemplateListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'content' => 'Content',
        'eventId' => 'EventId',
        'params' => 'Params',
        'subject' => 'Subject',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
