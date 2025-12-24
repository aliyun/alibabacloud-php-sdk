<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetsResponseBody\componentAssets;

class DescribeComponentAssetsResponseBody extends Model
{
    /**
     * @var componentAssets[]
     */
    public $componentAssets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentAssets' => 'ComponentAssets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->componentAssets)) {
            Model::validateArray($this->componentAssets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentAssets) {
            if (\is_array($this->componentAssets)) {
                $res['ComponentAssets'] = [];
                $n1 = 0;
                foreach ($this->componentAssets as $item1) {
                    $res['ComponentAssets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ComponentAssets'])) {
            if (!empty($map['ComponentAssets'])) {
                $model->componentAssets = [];
                $n1 = 0;
                foreach ($map['ComponentAssets'] as $item1) {
                    $model->componentAssets[$n1] = componentAssets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
