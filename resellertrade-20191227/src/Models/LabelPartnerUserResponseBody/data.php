<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\LabelPartnerUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $userPK;

    /**
     * @var string
     */
    public $userTag;
    protected $_name = [
        'userPK'  => 'UserPK',
        'userTag' => 'UserTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPK) {
            $res['UserPK'] = $this->userPK;
        }
        if (null !== $this->userTag) {
            $res['UserTag'] = $this->userTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPK'])) {
            $model->userPK = $map['UserPK'];
        }
        if (isset($map['UserTag'])) {
            $model->userTag = $map['UserTag'];
        }

        return $model;
    }
}
