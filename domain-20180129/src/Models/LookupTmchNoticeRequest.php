<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class LookupTmchNoticeRequest extends Model
{
    /**
     * @example 2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001
     *
     * @var string
     */
    public $claimKey;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'claimKey'     => 'ClaimKey',
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->claimKey) {
            $res['ClaimKey'] = $this->claimKey;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LookupTmchNoticeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClaimKey'])) {
            $model->claimKey = $map['ClaimKey'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
