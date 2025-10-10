<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class ReadPageItem extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $markdown;

    /**
     * @var string
     */
    public $rawHtml;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'html' => 'html',
        'markdown' => 'markdown',
        'rawHtml' => 'rawHtml',
        'statusCode' => 'statusCode',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->html) {
            $res['html'] = $this->html;
        }

        if (null !== $this->markdown) {
            $res['markdown'] = $this->markdown;
        }

        if (null !== $this->rawHtml) {
            $res['rawHtml'] = $this->rawHtml;
        }

        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['html'])) {
            $model->html = $map['html'];
        }

        if (isset($map['markdown'])) {
            $model->markdown = $map['markdown'];
        }

        if (isset($map['rawHtml'])) {
            $model->rawHtml = $map['rawHtml'];
        }

        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
