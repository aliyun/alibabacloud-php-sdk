<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SubscribeSpaceEventRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $pushConfig;
    protected $_name = [
        'spaceId'    => 'SpaceId',
        'pushConfig' => 'PushConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->pushConfig) {
            $res['PushConfig'] = $this->pushConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscribeSpaceEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['PushConfig'])) {
            $model->pushConfig = $map['PushConfig'];
        }

        return $model;
    }
}
