<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class ApplyAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $switchFrontOperaUid;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'switchFrontOperaUid' => 'SwitchFrontOperaUid',
        'uid'                 => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchFrontOperaUid) {
            $res['SwitchFrontOperaUid'] = $this->switchFrontOperaUid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchFrontOperaUid'])) {
            $model->switchFrontOperaUid = $map['SwitchFrontOperaUid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
