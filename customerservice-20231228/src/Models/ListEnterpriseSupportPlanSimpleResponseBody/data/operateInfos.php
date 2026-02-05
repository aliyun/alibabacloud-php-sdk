<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanSimpleResponseBody\data;

use AlibabaCloud\Dara\Model;

class operateInfos extends Model
{
    /**
     * @var bool
     */
    public $canClick;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'canClick' => 'canClick',
        'text' => 'text',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canClick) {
            $res['canClick'] = $this->canClick;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['canClick'])) {
            $model->canClick = $map['canClick'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
