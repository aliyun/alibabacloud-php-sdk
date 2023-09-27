<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeIpControlsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeIpControlsResponseBody\ipControlInfos\ipControlInfo;
use AlibabaCloud\Tea\Model;

class ipControlInfos extends Model
{
    /**
     * @var ipControlInfo[]
     */
    public $ipControlInfo;
    protected $_name = [
        'ipControlInfo' => 'IpControlInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipControlInfo) {
            $res['IpControlInfo'] = [];
            if (null !== $this->ipControlInfo && \is_array($this->ipControlInfo)) {
                $n = 0;
                foreach ($this->ipControlInfo as $item) {
                    $res['IpControlInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpControlInfo'])) {
            if (!empty($map['IpControlInfo'])) {
                $model->ipControlInfo = [];
                $n                    = 0;
                foreach ($map['IpControlInfo'] as $item) {
                    $model->ipControlInfo[$n++] = null !== $item ? ipControlInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
