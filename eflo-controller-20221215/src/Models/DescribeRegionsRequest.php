<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @description The natural language that is used to filter responses. For more information, see RFC 7231.
     *
     * zh-CN en-US Default value: zh-CN.
     *
     * Valid values:
     *
     *   en-US
     *   zh-CN
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        return $model;
    }
}
