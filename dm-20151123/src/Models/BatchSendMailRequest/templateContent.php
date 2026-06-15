<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\BatchSendMailRequest;

use AlibabaCloud\Dara\Model;

class templateContent extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $htmlBody;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $textBody;
    protected $_name = [
        'alias' => 'Alias',
        'htmlBody' => 'HtmlBody',
        'subject' => 'Subject',
        'textBody' => 'TextBody',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->htmlBody) {
            $res['HtmlBody'] = $this->htmlBody;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->textBody) {
            $res['TextBody'] = $this->textBody;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['HtmlBody'])) {
            $model->htmlBody = $map['HtmlBody'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        if (isset($map['TextBody'])) {
            $model->textBody = $map['TextBody'];
        }

        return $model;
    }
}
