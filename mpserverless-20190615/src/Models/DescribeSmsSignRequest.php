<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmsSignRequest extends Model
{
    /**
     * @var string
     */
    public $signId;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'signId'  => 'SignId',
        'spaceId' => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
