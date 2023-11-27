<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$10010
     *
     * @var string
     */
    public $appCid;

    /**
     * @example 123123
     *
     * @var string
     */
    public $operatorAppUid;
    protected $_name = [
        'appCid'         => 'AppCid',
        'operatorAppUid' => 'OperatorAppUid',
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
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
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
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }

        return $model;
    }
}
