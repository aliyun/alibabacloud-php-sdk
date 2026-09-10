<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetSqlTableLineageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $downstreamTables;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $upstreamTables;
    protected $_name = [
        'downstreamTables' => 'downstreamTables',
        'errorMsg' => 'errorMsg',
        'success' => 'success',
        'upstreamTables' => 'upstreamTables',
    ];

    public function validate()
    {
        if (\is_array($this->downstreamTables)) {
            Model::validateArray($this->downstreamTables);
        }
        if (\is_array($this->upstreamTables)) {
            Model::validateArray($this->upstreamTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downstreamTables) {
            if (\is_array($this->downstreamTables)) {
                $res['downstreamTables'] = [];
                $n1 = 0;
                foreach ($this->downstreamTables as $item1) {
                    $res['downstreamTables'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->upstreamTables) {
            if (\is_array($this->upstreamTables)) {
                $res['upstreamTables'] = [];
                $n1 = 0;
                foreach ($this->upstreamTables as $item1) {
                    $res['upstreamTables'][$n1] = $item1;
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
        if (isset($map['downstreamTables'])) {
            if (!empty($map['downstreamTables'])) {
                $model->downstreamTables = [];
                $n1 = 0;
                foreach ($map['downstreamTables'] as $item1) {
                    $model->downstreamTables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['upstreamTables'])) {
            if (!empty($map['upstreamTables'])) {
                $model->upstreamTables = [];
                $n1 = 0;
                foreach ($map['upstreamTables'] as $item1) {
                    $model->upstreamTables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
