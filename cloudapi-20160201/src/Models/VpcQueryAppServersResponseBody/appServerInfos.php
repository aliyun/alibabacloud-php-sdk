<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcQueryAppServersResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcQueryAppServersResponseBody\appServerInfos\appServerInfo;
use AlibabaCloud\Tea\Model;

class appServerInfos extends Model
{
    /**
     * @var appServerInfo[]
     */
    public $appServerInfo;
    protected $_name = [
        'appServerInfo' => 'AppServerInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appServerInfo) {
            $res['AppServerInfo'] = [];
            if (null !== $this->appServerInfo && \is_array($this->appServerInfo)) {
                $n = 0;
                foreach ($this->appServerInfo as $item) {
                    $res['AppServerInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appServerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppServerInfo'])) {
            if (!empty($map['AppServerInfo'])) {
                $model->appServerInfo = [];
                $n                    = 0;
                foreach ($map['AppServerInfo'] as $item) {
                    $model->appServerInfo[$n++] = null !== $item ? appServerInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
