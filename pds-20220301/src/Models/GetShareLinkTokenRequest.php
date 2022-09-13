<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetShareLinkTokenRequest extends Model
{
    /**
     * @var int
     */
    public $expireSec;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $sharePwd;
    protected $_name = [
        'expireSec' => 'expire_sec',
        'shareId'   => 'share_id',
        'sharePwd'  => 'share_pwd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireSec) {
            $res['expire_sec'] = $this->expireSec;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->sharePwd) {
            $res['share_pwd'] = $this->sharePwd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShareLinkTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expire_sec'])) {
            $model->expireSec = $map['expire_sec'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['share_pwd'])) {
            $model->sharePwd = $map['share_pwd'];
        }

        return $model;
    }
}
