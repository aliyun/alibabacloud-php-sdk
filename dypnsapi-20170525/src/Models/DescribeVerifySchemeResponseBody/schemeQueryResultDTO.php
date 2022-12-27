<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeResponseBody;

use AlibabaCloud\Tea\Model;

class schemeQueryResultDTO extends Model
{
    /**
     * @example ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****
     *
     * @var string
     */
    public $appEncryptInfo;
    protected $_name = [
        'appEncryptInfo' => 'AppEncryptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEncryptInfo) {
            $res['AppEncryptInfo'] = $this->appEncryptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeQueryResultDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEncryptInfo'])) {
            $model->appEncryptInfo = $map['AppEncryptInfo'];
        }

        return $model;
    }
}
