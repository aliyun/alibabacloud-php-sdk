<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtGatedLaunchPolicy4ResponseBody extends Model
{
    /**
     * @var string
     */
    public $isGatedLaunch;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isGatedLaunch' => 'IsGatedLaunch',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isGatedLaunch) {
            $res['IsGatedLaunch'] = $this->isGatedLaunch;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FtGatedLaunchPolicy4ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsGatedLaunch'])) {
            $model->isGatedLaunch = $map['IsGatedLaunch'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
