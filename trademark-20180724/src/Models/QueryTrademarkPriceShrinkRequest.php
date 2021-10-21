<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkPriceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $orderDataShrink;
    protected $_name = [
        'userId'          => 'UserId',
        'tmName'          => 'TmName',
        'tmIcon'          => 'TmIcon',
        'type'            => 'Type',
        'orderDataShrink' => 'OrderData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->orderDataShrink) {
            $res['OrderData'] = $this->orderDataShrink;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OrderData'])) {
            $model->orderDataShrink = $map['OrderData'];
        }

        return $model;
    }
}
