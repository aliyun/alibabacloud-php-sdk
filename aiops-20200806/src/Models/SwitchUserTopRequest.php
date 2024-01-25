<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class SwitchUserTopRequest extends Model
{
    /**
     * @var string
     */
    public $switchFrontOperaUid;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'switchFrontOperaUid' => 'SwitchFrontOperaUid',
        'type'                => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchUserTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchFrontOperaUid'])) {
            $model->switchFrontOperaUid = $map['SwitchFrontOperaUid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
