<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList;

use AlibabaCloud\Dara\Model;

class titleConfigs extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $langType;

    /**
     * @var string
     */
    public $titleText;
    protected $_name = [
        'color' => 'Color',
        'langType' => 'LangType',
        'titleText' => 'TitleText',
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

        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }

        if (null !== $this->titleText) {
            $res['TitleText'] = $this->titleText;
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

        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }

        if (isset($map['TitleText'])) {
            $model->titleText = $map['TitleText'];
        }

        return $model;
    }
}
