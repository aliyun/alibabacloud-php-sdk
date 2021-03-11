<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponseBody\resourcePackageInfos\resourcePackageInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePackageInfo) {
            $res['ResourcePackageInfo'] = [];
            if (null !== $this->resourcePackageInfo && \is_array($this->resourcePackageInfo)) {
                $n = 0;
                foreach ($this->resourcePackageInfo as $item) {
                    $res['ResourcePackageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePackageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePackageInfo'])) {
            if (!empty($map['ResourcePackageInfo'])) {
                $model->resourcePackageInfo = [];
                $n                          = 0;
                foreach ($map['ResourcePackageInfo'] as $item) {
                    $model->resourcePackageInfo[$n++] = null !== $item ? resourcePackageInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
