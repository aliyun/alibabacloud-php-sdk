<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateSmsSignRequest extends Model
{
    /**
     * @var string
     */
    public $signId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'signId'   => 'SignId',
        'remark'   => 'Remark',
        'spaceId'  => 'SpaceId',
        'signName' => 'SignName',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
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
     * @return UpdateSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
