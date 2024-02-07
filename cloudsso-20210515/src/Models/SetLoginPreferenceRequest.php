<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetLoginPreferenceRequest extends Model
{
    /**
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example 192.168.0.0/16;10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;
    protected $_name = [
        'directoryId'       => 'DirectoryId',
        'loginNetworkMasks' => 'LoginNetworkMasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoginPreferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        return $model;
    }
}
