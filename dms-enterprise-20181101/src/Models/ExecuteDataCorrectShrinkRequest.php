<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteDataCorrectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tid;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $actionDetailShrink;
    protected $_name = [
        'tid'                => 'Tid',
        'orderId'            => 'OrderId',
        'actionName'         => 'ActionName',
        'actionDetailShrink' => 'ActionDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->actionDetailShrink) {
            $res['ActionDetail'] = $this->actionDetailShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteDataCorrectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ActionDetail'])) {
            $model->actionDetailShrink = $map['ActionDetail'];
        }

        return $model;
    }
}
