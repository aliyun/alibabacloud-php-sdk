<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\BaseCityInfoSearchResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 330100
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameTree;

    /**
     * @example 0
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'code'     => 'code',
        'name'     => 'name',
        'nameTree' => 'nameTree',
        'region'   => 'region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameTree) {
            $res['nameTree'] = $this->nameTree;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameTree'])) {
            $model->nameTree = $map['nameTree'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
