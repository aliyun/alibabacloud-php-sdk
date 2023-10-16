<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ComplementIntentionUserIdRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunKp;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $complementUserId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'aliyunKp'         => 'AliyunKp',
        'bid'              => 'Bid',
        'bizId'            => 'BizId',
        'callerParentId'   => 'CallerParentId',
        'callerType'       => 'CallerType',
        'complementUserId' => 'ComplementUserId',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunKp) {
            $res['AliyunKp'] = $this->aliyunKp;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->complementUserId) {
            $res['ComplementUserId'] = $this->complementUserId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComplementIntentionUserIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunKp'])) {
            $model->aliyunKp = $map['AliyunKp'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['ComplementUserId'])) {
            $model->complementUserId = $map['ComplementUserId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
