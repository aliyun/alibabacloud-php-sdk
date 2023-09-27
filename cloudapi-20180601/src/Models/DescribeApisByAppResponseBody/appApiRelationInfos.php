<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByAppResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByAppResponseBody\appApiRelationInfos\appApiRelationInfo;
use AlibabaCloud\Tea\Model;

class appApiRelationInfos extends Model
{
    /**
     * @var appApiRelationInfo[]
     */
    public $appApiRelationInfo;
    protected $_name = [
        'appApiRelationInfo' => 'AppApiRelationInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appApiRelationInfo) {
            $res['AppApiRelationInfo'] = [];
            if (null !== $this->appApiRelationInfo && \is_array($this->appApiRelationInfo)) {
                $n = 0;
                foreach ($this->appApiRelationInfo as $item) {
                    $res['AppApiRelationInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appApiRelationInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppApiRelationInfo'])) {
            if (!empty($map['AppApiRelationInfo'])) {
                $model->appApiRelationInfo = [];
                $n                         = 0;
                foreach ($map['AppApiRelationInfo'] as $item) {
                    $model->appApiRelationInfo[$n++] = null !== $item ? appApiRelationInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
