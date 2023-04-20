<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ListOpenPlatformConfigRequest extends Model
{
    /**
     * @example Alipay
     *
     * @var string
     */
    public $platform;

    /**
     * @example 0e16bb12-14af-****-b24c-5ac1a9a7bb9f
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'platform' => 'Platform',
        'spaceId'  => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOpenPlatformConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
