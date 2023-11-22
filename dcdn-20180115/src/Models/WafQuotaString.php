<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class WafQuotaString extends Model
{
    /**
     * @var string
     */
    public $regexp;
    protected $_name = [
        'regexp' => 'Regexp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regexp) {
            $res['Regexp'] = $this->regexp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WafQuotaString
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Regexp'])) {
            $model->regexp = $map['Regexp'];
        }

        return $model;
    }
}
