<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$12345678
     *
     * @var string
     */
    public $appCid;

    /**
     * @var string[]
     */
    public $members;

    /**
     * @example 123
     *
     * @var string
     */
    public $operatorAppUid;

    /**
     * @example 600
     *
     * @var int
     */
    public $silenceDuration;
    protected $_name = [
        'appCid'          => 'AppCid',
        'members'         => 'Members',
        'operatorAppUid'  => 'OperatorAppUid',
        'silenceDuration' => 'SilenceDuration',
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
        if (null !== $this->members) {
            $res['Members'] = $this->members;
        }
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }
        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
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
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = $map['Members'];
            }
        }
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }
        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }

        return $model;
    }
}
