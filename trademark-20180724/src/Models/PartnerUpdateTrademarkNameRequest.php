<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class PartnerUpdateTrademarkNameRequest extends Model
{
    /**
     * @description tmIcon
     *
     * @var string
     */
    public $tmIcon;

    /**
     * @description aliyunKp
     *
     * @var string
     */
    public $aliyunKp;

    /**
     * @description type
     *
     * @var int
     */
    public $type;

    /**
     * @description bizId
     *
     * @var string
     */
    public $bizId;

    /**
     * @description callerType
     *
     * @var string
     */
    public $callerType;

    /**
     * @description callerParentId
     *
     * @var int
     */
    public $callerParentId;

    /**
     * @description tmComment
     *
     * @var string
     */
    public $tmComment;

    /**
     * @description tmName
     *
     * @var string
     */
    public $tmName;

    /**
     * @description bid
     *
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $eventSceneType;
    protected $_name = [
        'tmIcon'         => 'TmIcon',
        'aliyunKp'       => 'AliyunKp',
        'type'           => 'Type',
        'bizId'          => 'BizId',
        'callerType'     => 'CallerType',
        'callerParentId' => 'CallerParentId',
        'tmComment'      => 'TmComment',
        'tmName'         => 'TmName',
        'bid'            => 'Bid',
        'eventSceneType' => 'EventSceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->aliyunKp) {
            $res['AliyunKp'] = $this->aliyunKp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->tmComment) {
            $res['TmComment'] = $this->tmComment;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->eventSceneType) {
            $res['EventSceneType'] = $this->eventSceneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PartnerUpdateTrademarkNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['AliyunKp'])) {
            $model->aliyunKp = $map['AliyunKp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['TmComment'])) {
            $model->tmComment = $map['TmComment'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['EventSceneType'])) {
            $model->eventSceneType = $map['EventSceneType'];
        }

        return $model;
    }
}
