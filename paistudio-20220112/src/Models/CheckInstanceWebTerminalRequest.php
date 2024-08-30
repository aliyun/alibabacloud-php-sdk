<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceWebTerminalRequest extends Model
{
    /**
     * @example wss://pai-dlc-proxy-cn-shanghai.aliyun.com/terminal/t1157703270994901/dlcmjzjt1dxbmx4h/dlcmjzjt1dxbmx4h-worker-0?Token=******
     *
     * @var string
     */
    public $checkInfo;
    protected $_name = [
        'checkInfo' => 'CheckInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkInfo) {
            $res['CheckInfo'] = $this->checkInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstanceWebTerminalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckInfo'])) {
            $model->checkInfo = $map['CheckInfo'];
        }

        return $model;
    }
}
