<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeComponentListResponseBody extends Model
{
    /**
     * @description The information about the components. The value is a JSON array.
     *
     * @example [
     * {
     * "actions": [
     * {
     * "description": "mysql component",
     * "name": "storeIdb",
     * "parameters": [
     * {
     * "description": "update the mysql db",
     * "name": "updateSql",
     * "required": false
     * }
     * ]
     * }
     * ],
     * "basic": {
     * "description": "mysq sql component for 5.6",
     * "logo": "https://img.alicdn.com/tfs/TB1H89IpH3nBKNjSZFMXXaUSFXa-200-200.svg",
     * "name": "Mysql"
     * }
     * }
     * ]
     *
     * @var string
     */
    public $components;

    /**
     * @description The request ID.
     *
     * @example B0A255B3-495C-56FB-8B6B-DB073F80388A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'components' => 'Components',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
