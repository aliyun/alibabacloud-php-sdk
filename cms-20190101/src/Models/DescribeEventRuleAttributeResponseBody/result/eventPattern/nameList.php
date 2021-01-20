<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern;

use AlibabaCloud\Tea\Model;

class nameList extends Model
{
    /**
     * @var string[]
     */
    public $nameList;
    protected $_name = [
        'nameList' => 'NameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = $map['NameList'];
            }
        }

        return $model;
    }
}
