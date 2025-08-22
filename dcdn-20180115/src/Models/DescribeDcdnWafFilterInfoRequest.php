<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnWafFilterInfoRequest extends Model
{
    /**
     * @var string
     */
    public $defenseScenes;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'defenseScenes' => 'DefenseScenes',
        'language' => 'Language',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defenseScenes) {
            $res['DefenseScenes'] = $this->defenseScenes;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (isset($map['DefenseScenes'])) {
            $model->defenseScenes = $map['DefenseScenes'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
