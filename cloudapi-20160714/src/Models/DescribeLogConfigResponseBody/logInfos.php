<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody\logInfos\logInfo;
use AlibabaCloud\Tea\Model;

class logInfos extends Model
{
    /**
     * @var logInfo[]
     */
    public $logInfo;
    protected $_name = [
        'logInfo' => 'LogInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['LogInfo'] = [];
            if (null !== $this->logInfo && \is_array($this->logInfo)) {
                $n = 0;
                foreach ($this->logInfo as $item) {
                    $res['LogInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogInfo'])) {
            if (!empty($map['LogInfo'])) {
                $model->logInfo = [];
                $n              = 0;
                foreach ($map['LogInfo'] as $item) {
                    $model->logInfo[$n++] = null !== $item ? logInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
