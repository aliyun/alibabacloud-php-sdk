<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeResourcePackagesResponseBody\resourcePackageList;

class DescribeResourcePackagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePackageList[]
     */
    public $resourcePackageList;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourcePackageList' => 'ResourcePackageList',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePackageList)) {
            Model::validateArray($this->resourcePackageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourcePackageList) {
            if (\is_array($this->resourcePackageList)) {
                $res['ResourcePackageList'] = [];
                $n1 = 0;
                foreach ($this->resourcePackageList as $item1) {
                    $res['ResourcePackageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['ResourcePackageList'])) {
            if (!empty($map['ResourcePackageList'])) {
                $model->resourcePackageList = [];
                $n1 = 0;
                foreach ($map['ResourcePackageList'] as $item1) {
                    $model->resourcePackageList[$n1] = resourcePackageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
