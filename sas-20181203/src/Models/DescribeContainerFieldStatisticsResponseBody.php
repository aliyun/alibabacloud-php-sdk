<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerFieldStatisticsResponseBody\containerGroupedFields;

class DescribeContainerFieldStatisticsResponseBody extends Model
{
    /**
     * @var containerGroupedFields
     */
    public $containerGroupedFields;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerGroupedFields' => 'ContainerGroupedFields',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->containerGroupedFields) {
            $this->containerGroupedFields->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerGroupedFields) {
            $res['ContainerGroupedFields'] = null !== $this->containerGroupedFields ? $this->containerGroupedFields->toArray($noStream) : $this->containerGroupedFields;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
