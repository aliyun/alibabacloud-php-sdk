<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryResponseBody;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryResponseBody\data\records;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example eCKqVlS5FKF5EWGGOo8EgQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description -
     *
     * @var records[]
     */
    public $records;

    /**
     * @example 21
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'nextToken' => 'NextToken',
        'records' => 'Records',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
