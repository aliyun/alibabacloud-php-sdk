<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlexInnerPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $esnBizId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $groupInnerPolicy;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'lang'             => 'Lang',
        'esnBizId'         => 'EsnBizId',
        'groupId'          => 'GroupId',
        'groupInnerPolicy' => 'GroupInnerPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupInnerPolicy) {
            $res['GroupInnerPolicy'] = $this->groupInnerPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlexInnerPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupInnerPolicy'])) {
            $model->groupInnerPolicy = $map['GroupInnerPolicy'];
        }

        return $model;
    }
}
