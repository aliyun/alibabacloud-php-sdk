<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnSecFuncInfoRequest extends Model
{
    /**
     * @description The language. Valid values: en and zh. Default value: en.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the drop-down list. Valid values: RobotRuleName and RobotObject.
     *
     * @example RobotRuleName
     *
     * @var string
     */
    public $secFuncType;
    protected $_name = [
        'lang'        => 'Lang',
        'secFuncType' => 'SecFuncType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->secFuncType) {
            $res['SecFuncType'] = $this->secFuncType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnSecFuncInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SecFuncType'])) {
            $model->secFuncType = $map['SecFuncType'];
        }

        return $model;
    }
}
