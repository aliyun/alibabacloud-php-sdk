<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssSddp\V20240222\Models;

use AlibabaCloud\Tea\Model;

class UpgradeSddpVersionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $ossVersion;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'ossVersion'  => 'OssVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ossVersion) {
            $res['OssVersion'] = $this->ossVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeSddpVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OssVersion'])) {
            $model->ossVersion = $map['OssVersion'];
        }

        return $model;
    }
}
