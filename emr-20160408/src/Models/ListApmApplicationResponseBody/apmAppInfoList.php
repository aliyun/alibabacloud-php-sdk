<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListApmApplicationResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListApmApplicationResponseBody\apmAppInfoList\apmAppInfo;
use AlibabaCloud\Tea\Model;

class apmAppInfoList extends Model
{
    /**
     * @var apmAppInfo[]
     */
    public $apmAppInfo;
    protected $_name = [
        'apmAppInfo' => 'ApmAppInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apmAppInfo) {
            $res['ApmAppInfo'] = [];
            if (null !== $this->apmAppInfo && \is_array($this->apmAppInfo)) {
                $n = 0;
                foreach ($this->apmAppInfo as $item) {
                    $res['ApmAppInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apmAppInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApmAppInfo'])) {
            if (!empty($map['ApmAppInfo'])) {
                $model->apmAppInfo = [];
                $n                 = 0;
                foreach ($map['ApmAppInfo'] as $item) {
                    $model->apmAppInfo[$n++] = null !== $item ? apmAppInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
