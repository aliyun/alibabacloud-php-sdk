<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\data\content;

use AlibabaCloud\Dara\Model;

class dingCard extends Model
{
    /**
     * @var string
     */
    public $cardDesc;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'cardDesc' => 'cardDesc',
        'content' => 'content',
        'contentType' => 'contentType',
        'finished' => 'finished',
        'templateId' => 'templateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardDesc) {
            $res['cardDesc'] = $this->cardDesc;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->finished) {
            $res['finished'] = $this->finished;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
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
        if (isset($map['cardDesc'])) {
            $model->cardDesc = $map['cardDesc'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['finished'])) {
            $model->finished = $map['finished'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
