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
     * @description Specifies whether to skip an error that occurs in executing an SQL statement. Valid values:
     *
     *   **true**: continues to execute subsequent SQL statements if an error occurs in executing an SQL statement.
     *   **false**: stops executing subsequent SQL statements if an error occurs in executing an SQL statement.
     *
     * @example false
     *
     * @var bool
     */
    public $ignoreError;

    /**
     * @description The information about the base database.
     *
     * @var source
     */
    public $source;

    /**
     * @description The information about the table of which you want to synchronize the schema.
     *
     * @var tableInfoList[]
     */
    public $tableInfoList;

    /**
     * @description The information about the database to which you want to synchronize the schema of a table.
     *
     * @var target
     */
    public $target;
    protected $_name = [
        'ignoreError'   => 'IgnoreError',
        'source'        => 'Source',
        'tableInfoList' => 'TableInfoList',
        'target'        => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
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
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
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
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
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
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
