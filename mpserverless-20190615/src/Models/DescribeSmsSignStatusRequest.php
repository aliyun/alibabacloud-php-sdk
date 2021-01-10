<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmsSignStatusRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $signIds;
    protected $_name = [
        'spaceId' => 'SpaceId',
        'signIds' => 'SignIds',
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
        if (null !== $this->signIds) {
            $res['SignIds'] = $this->signIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmsSignStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SignIds'])) {
            $model->signIds = $map['SignIds'];
        }

        return $model;
    }
}
