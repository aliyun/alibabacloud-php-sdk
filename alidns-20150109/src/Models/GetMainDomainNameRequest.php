<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetMainDomainNameRequest extends Model
{
    /**
     * @description The input string. The string can be up to 128 characters in length.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $inputString;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'inputString' => 'InputString',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputString) {
            $res['InputString'] = $this->inputString;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMainDomainNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputString'])) {
            $model->inputString = $map['InputString'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
