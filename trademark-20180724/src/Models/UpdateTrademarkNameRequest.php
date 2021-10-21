<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrademarkNameRequest extends Model
{
    /**
     * @description 幂等参数
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 业务id
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 商标名称
     *
     * @var string
     */
    public $tmName;

    /**
     * @description 商标图片
     *
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmComment;

    /**
     * @description 商标类型
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'bizId'       => 'BizId',
        'tmName'      => 'TmName',
        'tmIcon'      => 'TmIcon',
        'tmComment'   => 'TmComment',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmComment) {
            $res['TmComment'] = $this->tmComment;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrademarkNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmComment'])) {
            $model->tmComment = $map['TmComment'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
