<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmAvailableAlertGroupRequest extends Model
{
    /**
     * @description The language used by the user.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'lang' => 'Lang',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAvailableAlertGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
