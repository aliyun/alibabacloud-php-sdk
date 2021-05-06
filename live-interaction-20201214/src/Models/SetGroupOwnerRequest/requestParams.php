<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 新群主
     *
     * @var string
     */
    public $newOwnerAppUid;
    protected $_name = [
        'appCid'         => 'AppCid',
        'newOwnerAppUid' => 'NewOwnerAppUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->newOwnerAppUid) {
            $res['NewOwnerAppUid'] = $this->newOwnerAppUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['NewOwnerAppUid'])) {
            $model->newOwnerAppUid = $map['NewOwnerAppUid'];
        }

        return $model;
    }
}
