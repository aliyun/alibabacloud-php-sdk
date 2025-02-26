<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesResponseBody\cloudResources;

class DescribeCloudResourcesResponseBody extends Model
{
    /**
     * @var cloudResources[]
     */
    public $cloudResources;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudResources' => 'CloudResources',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cloudResources)) {
            Model::validateArray($this->cloudResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudResources) {
            if (\is_array($this->cloudResources)) {
                $res['CloudResources'] = [];
                $n1                    = 0;
                foreach ($this->cloudResources as $item1) {
                    $res['CloudResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CloudResources'])) {
            if (!empty($map['CloudResources'])) {
                $model->cloudResources = [];
                $n1                    = 0;
                foreach ($map['CloudResources'] as $item1) {
                    $model->cloudResources[$n1++] = cloudResources::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
