<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceTypeAutoEnableResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool[]
     */
    public $resourceTypeAutoEnable;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceTypeAutoEnable' => 'ResourceTypeAutoEnable',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypeAutoEnable)) {
            Model::validateArray($this->resourceTypeAutoEnable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceTypeAutoEnable) {
            if (\is_array($this->resourceTypeAutoEnable)) {
                $res['ResourceTypeAutoEnable'] = [];
                foreach ($this->resourceTypeAutoEnable as $key1 => $value1) {
                    $res['ResourceTypeAutoEnable'][$key1] = $value1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceTypeAutoEnable'])) {
            if (!empty($map['ResourceTypeAutoEnable'])) {
                $model->resourceTypeAutoEnable = [];
                foreach ($map['ResourceTypeAutoEnable'] as $key1 => $value1) {
                    $model->resourceTypeAutoEnable[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
