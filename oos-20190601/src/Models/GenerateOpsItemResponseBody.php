<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GenerateOpsItemResponseBody extends Model
{
    /**
     * @description The O\\&M item list.
     *
     * @var string[]
     */
    public $opsItemIds;

    /**
     * @description The ID of the request.
     *
     * @example DA4F08D4-DA54-5407-84B9-108C71D75B17
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'opsItemIds' => 'OpsItemIds',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opsItemIds) {
            $res['OpsItemIds'] = $this->opsItemIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOpsItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpsItemIds'])) {
            if (!empty($map['OpsItemIds'])) {
                $model->opsItemIds = $map['OpsItemIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
