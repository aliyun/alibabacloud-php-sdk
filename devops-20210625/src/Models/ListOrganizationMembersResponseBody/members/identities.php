<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersResponseBody\members;

use AlibabaCloud\Tea\Model;

class identities extends Model
{
    /**
     * @description 第三方系统的用户Id
     *
     * @var string
     */
    public $externUid;

    /**
     * @description 第三方系统
     *
     * @var string
     */
    public $provider;
    protected $_name = [
        'externUid' => 'externUid',
        'provider'  => 'provider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return identities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
