<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetMmsDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $withConfig;
    protected $_name = [
        'lang' => 'lang',
        'withConfig' => 'withConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->withConfig) {
            $res['withConfig'] = $this->withConfig;
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
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['withConfig'])) {
            $model->withConfig = $map['withConfig'];
        }

        return $model;
    }
}
