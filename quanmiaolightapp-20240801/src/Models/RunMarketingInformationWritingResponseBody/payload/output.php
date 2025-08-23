<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationWritingResponseBody\payload;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $reasonContent;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'reasonContent' => 'reasonContent',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonContent) {
            $res['reasonContent'] = $this->reasonContent;
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
        if (isset($map['reasonContent'])) {
            $model->reasonContent = $map['reasonContent'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
