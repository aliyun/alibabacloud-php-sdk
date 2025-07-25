<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomLinesRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The unique IDs of the custom lines that you want to delete. Separate the unique IDs with commas (,). You can call the [DescribeCustomLines](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describecustomlines?spm=a2c63.p38356.help-menu-search-29697.d_0) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 1234,1235
     *
     * @var string
     */
    public $lineIds;
    protected $_name = [
        'lang' => 'Lang',
        'lineIds' => 'LineIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lineIds) {
            $res['LineIds'] = $this->lineIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomLinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LineIds'])) {
            $model->lineIds = $map['LineIds'];
        }

        return $model;
    }
}
