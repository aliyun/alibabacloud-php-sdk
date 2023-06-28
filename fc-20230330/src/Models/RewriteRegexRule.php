<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class RewriteRegexRule extends Model
{
    /**
     * @var string
     */
    public $regexStr;

    /**
     * @var string
     */
    public $replacement;
    protected $_name = [
        'regexStr'    => 'regexStr',
        'replacement' => 'replacement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regexStr) {
            $res['regexStr'] = $this->regexStr;
        }
        if (null !== $this->replacement) {
            $res['replacement'] = $this->replacement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RewriteRegexRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regexStr'])) {
            $model->regexStr = $map['regexStr'];
        }
        if (isset($map['replacement'])) {
            $model->replacement = $map['replacement'];
        }

        return $model;
    }
}
