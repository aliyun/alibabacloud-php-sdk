<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param\source;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param\tableInfoList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param\target;

class param extends Model
{
    /**
     * @var bool
     */
    public $ignoreError;

    /**
     * @var source
     */
    public $source;

    /**
     * @var tableInfoList[]
     */
    public $tableInfoList;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'ignoreError' => 'IgnoreError',
        'source' => 'Source',
        'tableInfoList' => 'TableInfoList',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (\is_array($this->tableInfoList)) {
            Model::validateArray($this->tableInfoList);
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->tableInfoList) {
            if (\is_array($this->tableInfoList)) {
                $res['TableInfoList'] = [];
                $n1 = 0;
                foreach ($this->tableInfoList as $item1) {
                    $res['TableInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }

        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        if (isset($map['TableInfoList'])) {
            if (!empty($map['TableInfoList'])) {
                $model->tableInfoList = [];
                $n1 = 0;
                foreach ($map['TableInfoList'] as $item1) {
                    $model->tableInfoList[$n1] = tableInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
