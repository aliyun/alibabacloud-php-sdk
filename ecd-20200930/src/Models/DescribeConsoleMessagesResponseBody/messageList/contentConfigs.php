<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList;

use AlibabaCloud\Dara\Model;

class contentConfigs extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $contentText;

    /**
     * @var string
     */
    public $langType;
    protected $_name = [
        'color' => 'Color',
        'contentText' => 'ContentText',
        'langType' => 'LangType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }

        if (null !== $this->contentText) {
            $res['ContentText'] = $this->contentText;
        }

        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
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
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }

        if (isset($map['ContentText'])) {
            $model->contentText = $map['ContentText'];
        }

        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }

        return $model;
    }
}
