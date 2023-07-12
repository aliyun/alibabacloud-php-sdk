<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppListResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppListResponse\data\list_\appInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var appInfo[]
     */
    public $appInfo;
    protected $_name = [
        'appInfo' => 'AppInfo',
    ];

    public function validate()
    {
        Model::validateRequired('appInfo', $this->appInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfo) {
            $res['AppInfo'] = [];
            if (null !== $this->appInfo && \is_array($this->appInfo)) {
                $n = 0;
                foreach ($this->appInfo as $item) {
                    $res['AppInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfo'])) {
            if (!empty($map['AppInfo'])) {
                $model->appInfo = [];
                $n              = 0;
                foreach ($map['AppInfo'] as $item) {
                    $model->appInfo[$n++] = null !== $item ? appInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
