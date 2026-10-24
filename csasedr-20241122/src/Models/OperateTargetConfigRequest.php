<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class OperateTargetConfigRequest extends Model
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
     * @var string[]
     */
    public $switchIdList;
    protected $_name = [
        'selectionKey' => 'SelectionKey',
        'status' => 'Status',
        'switchIdList' => 'SwitchIdList',
    ];

    public function validate()
    {
        if (\is_array($this->switchIdList)) {
            Model::validateArray($this->switchIdList);
        }
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

        if (null !== $this->switchIdList) {
            if (\is_array($this->switchIdList)) {
                $res['SwitchIdList'] = [];
                $n1 = 0;
                foreach ($this->switchIdList as $item1) {
                    $res['SwitchIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['SwitchIdList'])) {
                $model->switchIdList = [];
                $n1 = 0;
                foreach ($map['SwitchIdList'] as $item1) {
                    $model->switchIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
