<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class DescribePhoneInfoRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $sourceCode;
    protected $_name = [
        'lang'       => 'Lang',
        'sourceIp'   => 'SourceIp',
        'phoneNum'   => 'phoneNum',
        'sourceCode' => 'sourceCode',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->phoneNum) {
            $res['phoneNum'] = $this->phoneNum;
        }
        if (null !== $this->sourceCode) {
            $res['sourceCode'] = $this->sourceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['phoneNum'])) {
            $model->phoneNum = $map['phoneNum'];
        }
        if (isset($map['sourceCode'])) {
            $model->sourceCode = $map['sourceCode'];
        }

        return $model;
    }
}
