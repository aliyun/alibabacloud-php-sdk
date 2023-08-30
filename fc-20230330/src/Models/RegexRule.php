<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class RegexRule extends Model
{
    /**
     * @example ^/api/.+?/(.*)
     *
     * @var string
     */
    public $match;

    /**
     * @example /api/v2/$1
     *
     * @var string
     */
    public $replacement;
    protected $_name = [
        'match'       => 'match',
        'replacement' => 'replacement',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RegexRule
     */
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
