<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InitiateBucketWormRequest extends Model
{
    /**
     * @var InitiateWormConfiguration
     */
    public $initiateWormConfiguration;
    protected $_name = [
        'initiateWormConfiguration' => 'InitiateWormConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initiateWormConfiguration) {
            $res['InitiateWormConfiguration'] = null !== $this->initiateWormConfiguration ? $this->initiateWormConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitiateBucketWormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitiateWormConfiguration'])) {
            $model->initiateWormConfiguration = InitiateWormConfiguration::fromMap($map['InitiateWormConfiguration']);
        }

        return $model;
    }
}
