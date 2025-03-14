<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerFieldStatisticsResponseBody\containerGroupedFields;
use AlibabaCloud\Tea\Model;

class DescribeContainerFieldStatisticsResponseBody extends Model
{
    /**
     * @description The statistical information about containers.
     *
     * @var containerGroupedFields
     */
    public $containerGroupedFields;

    /**
     * @description The request ID.
     *
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerGroupedFields' => 'ContainerGroupedFields',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupedFields) {
            $res['ContainerGroupedFields'] = null !== $this->containerGroupedFields ? $this->containerGroupedFields->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerFieldStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupedFields'])) {
            $model->containerGroupedFields = containerGroupedFields::fromMap($map['ContainerGroupedFields']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
