<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class AttachSmsSignRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'spaceId'  => 'SpaceId',
        'signName' => 'SignName',
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
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
