<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeRegionsResponseBody\businessLocations;
use AlibabaCloud\Tea\Model;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var businessLocations[]
     */
    public $businessLocations;
    protected $_name = [
        'requestId'         => 'RequestId',
        'businessLocations' => 'BusinessLocations',
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
        if (null !== $this->businessLocations) {
            $res['BusinessLocations'] = [];
            if (null !== $this->businessLocations && \is_array($this->businessLocations)) {
                $n = 0;
                foreach ($this->businessLocations as $item) {
                    $res['BusinessLocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BusinessLocations'])) {
            if (!empty($map['BusinessLocations'])) {
                $model->businessLocations = [];
                $n                        = 0;
                foreach ($map['BusinessLocations'] as $item) {
                    $model->businessLocations[$n++] = null !== $item ? businessLocations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
