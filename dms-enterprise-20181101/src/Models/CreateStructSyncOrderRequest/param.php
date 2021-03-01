<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param\source;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param\tableInfoList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param\target;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var source
     */
    public $source;

    /**
     * @var target
     */
    public $target;

    /**
     * @var bool
     */
    public $ignoreError;

    /**
     * @var tableInfoList[]
     */
    public $tableInfoList;
    protected $_name = [
        'source'        => 'Source',
        'target'        => 'Target',
        'ignoreError'   => 'IgnoreError',
        'tableInfoList' => 'TableInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }
        if (null !== $this->tableInfoList) {
            $res['TableInfoList'] = [];
            if (null !== $this->tableInfoList && \is_array($this->tableInfoList)) {
                $n = 0;
                foreach ($this->tableInfoList as $item) {
                    $res['TableInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }
        if (isset($map['TableInfoList'])) {
            if (!empty($map['TableInfoList'])) {
                $model->tableInfoList = [];
                $n                    = 0;
                foreach ($map['TableInfoList'] as $item) {
                    $model->tableInfoList[$n++] = null !== $item ? tableInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
