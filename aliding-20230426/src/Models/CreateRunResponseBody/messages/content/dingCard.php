<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content;

use AlibabaCloud\Tea\Model;

class dingCard extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example basic_card_schema
     *
     * @var string
     */
    public $contentType;

    /**
     * @example true
     *
     * @var bool
     */
    public $finished;

    /**
     * @example templateId123
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'content' => 'content',
        'contentType' => 'contentType',
        'finished' => 'finished',
        'templateId' => 'templateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return dingCard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
