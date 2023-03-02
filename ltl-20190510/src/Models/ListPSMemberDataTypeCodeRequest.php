<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class ListPSMemberDataTypeCodeRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @example 19720316234381****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @example 2
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'bizChainId' => 'BizChainId',
        'memberUid'  => 'MemberUid',
        'num'        => 'Num',
        'size'       => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPSMemberDataTypeCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
