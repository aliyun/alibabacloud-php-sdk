<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListAssetSelectionSelectedTargetRequest extends Model
{
    /**
     * @var string
     */
    public $selectionKey;
    /**
     * @var string[]
     */
    public $targetList;
    protected $_name = [
        'selectionKey' => 'SelectionKey',
        'targetList'   => 'TargetList',
    ];

    public function validate()
    {
        if (\is_array($this->targetList)) {
            Model::validateArray($this->targetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        if (null !== $this->targetList) {
            if (\is_array($this->targetList)) {
                $res['TargetList'] = [];
                $n1                = 0;
                foreach ($this->targetList as $item1) {
                    $res['TargetList'][$n1++] = $item1;
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

        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n1                = 0;
                foreach ($map['TargetList'] as $item1) {
                    $model->targetList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
