<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingDataPackagesResponseBody\dataPackages;

class ListRenderingDataPackagesResponseBody extends Model
{
    /**
     * @var dataPackages[]
     */
    public $dataPackages;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataPackages' => 'DataPackages',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataPackages)) {
            Model::validateArray($this->dataPackages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPackages) {
            if (\is_array($this->dataPackages)) {
                $res['DataPackages'] = [];
                $n1 = 0;
                foreach ($this->dataPackages as $item1) {
                    $res['DataPackages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataPackages'])) {
            if (!empty($map['DataPackages'])) {
                $model->dataPackages = [];
                $n1 = 0;
                foreach ($map['DataPackages'] as $item1) {
                    $model->dataPackages[$n1++] = dataPackages::fromMap($item1);
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
