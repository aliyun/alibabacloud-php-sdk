<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponseBody\resourcePackageInfos\resourcePackageInfo;

class resourcePackageInfos extends Model
{
    /**
     * @var resourcePackageInfo[]
     */
    public $resourcePackageInfo;
    protected $_name = [
        'resourcePackageInfo' => 'ResourcePackageInfo',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePackageInfo)) {
            Model::validateArray($this->resourcePackageInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourcePackageInfo) {
            if (\is_array($this->resourcePackageInfo)) {
                $res['ResourcePackageInfo'] = [];
                $n1 = 0;
                foreach ($this->resourcePackageInfo as $item1) {
                    $res['ResourcePackageInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourcePackageInfo'])) {
            if (!empty($map['ResourcePackageInfo'])) {
                $model->resourcePackageInfo = [];
                $n1 = 0;
                foreach ($map['ResourcePackageInfo'] as $item1) {
                    $model->resourcePackageInfo[$n1] = resourcePackageInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
