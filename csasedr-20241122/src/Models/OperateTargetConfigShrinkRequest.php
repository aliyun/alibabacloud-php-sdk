<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class OperateTargetConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $selectionKey;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $switchIdListShrink;
    protected $_name = [
        'selectionKey' => 'SelectionKey',
        'status' => 'Status',
        'switchIdListShrink' => 'SwitchIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->switchIdListShrink) {
            $res['SwitchIdList'] = $this->switchIdListShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SwitchIdList'])) {
            $model->switchIdListShrink = $map['SwitchIdList'];
        }

        return $model;
    }
}
