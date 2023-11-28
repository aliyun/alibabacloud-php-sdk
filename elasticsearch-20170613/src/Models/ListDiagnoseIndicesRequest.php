<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDiagnoseIndicesRequest extends Model
{
    /**
     * @description The language. Multiple languages are supported.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'lang' => 'lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnoseIndicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        return $model;
    }
}
