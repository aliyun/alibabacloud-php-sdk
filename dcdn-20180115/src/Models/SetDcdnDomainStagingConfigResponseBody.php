<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnDomainStagingConfigResponseBody extends Model
{
    /**
     * @description You can set multiple records for some features, such as the edge_function feature. To update a record, you can set the ConfigId (Long type) field to specify the configuration items that you want to modify. Syntax:
     *
     * ```
     **Description**All parameter values are of the string type.
     *
     * jsmode: control of the JavaScript domain name whitelist. Valid values: redirect and bypass. |
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDcdnDomainStagingConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
