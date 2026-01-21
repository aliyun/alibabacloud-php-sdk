<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeRegionResourceTypeAutoEnableResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $regionResourceAutoEnable;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionResourceAutoEnable' => 'RegionResourceAutoEnable',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->regionResourceAutoEnable)) {
            Model::validateArray($this->regionResourceAutoEnable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionResourceAutoEnable) {
            if (\is_array($this->regionResourceAutoEnable)) {
                $res['RegionResourceAutoEnable'] = [];
                foreach ($this->regionResourceAutoEnable as $key1 => $value1) {
                    $res['RegionResourceAutoEnable'][$key1] = $value1;
                }
            }
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
        if (isset($map['RegionResourceAutoEnable'])) {
            if (!empty($map['RegionResourceAutoEnable'])) {
                $model->regionResourceAutoEnable = [];
                foreach ($map['RegionResourceAutoEnable'] as $key1 => $value1) {
                    $model->regionResourceAutoEnable[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
