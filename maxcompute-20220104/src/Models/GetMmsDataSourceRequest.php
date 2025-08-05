<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetMmsDataSourceRequest extends Model
{
    /**
     * @example en_US
     *
     * @var string
     */
    public $lang;

    /**
     * @example true
     *
     * @var bool
     */
    public $withConfig;
    protected $_name = [
        'lang' => 'lang',
        'withConfig' => 'withConfig',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetMmsDataSourceRequest
     */
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
