<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DeleteSmsSignRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $signId;
    protected $_name = [
        'spaceId' => 'SpaceId',
        'signId'  => 'SignId',
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
        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }

        return $model;
    }
}
