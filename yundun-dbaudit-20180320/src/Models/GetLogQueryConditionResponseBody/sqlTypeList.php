<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogQueryConditionResponseBody;

use AlibabaCloud\Tea\Model;

class sqlTypeList extends Model
{
    /**
     * @var string
     */
    public $sqlKeyword;

    /**
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'sqlKeyword' => 'SqlKeyword',
        'sqlType'    => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sqlKeyword) {
            $res['SqlKeyword'] = $this->sqlKeyword;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SqlKeyword'])) {
            $model->sqlKeyword = $map['SqlKeyword'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
