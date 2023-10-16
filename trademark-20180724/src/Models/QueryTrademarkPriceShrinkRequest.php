<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkPriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $orderDataShrink;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'orderDataShrink' => 'OrderData',
        'tmIcon'          => 'TmIcon',
        'tmName'          => 'TmName',
        'type'            => 'Type',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderDataShrink) {
            $res['OrderData'] = $this->orderDataShrink;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkPriceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderData'])) {
            $model->orderDataShrink = $map['OrderData'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
