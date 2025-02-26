<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class RegexRule extends Model
{
    /**
     * @var string
     */
    public $match;
    /**
     * @var string
     */
    public $replacement;
    protected $_name = [
        'match'       => 'match',
        'replacement' => 'replacement',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->match) {
            $res['match'] = $this->match;
        }

        if (null !== $this->replacement) {
            $res['replacement'] = $this->replacement;
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
        if (isset($map['match'])) {
            $model->match = $map['match'];
        }

        if (isset($map['replacement'])) {
            $model->replacement = $map['replacement'];
        }

        return $model;
    }
}
