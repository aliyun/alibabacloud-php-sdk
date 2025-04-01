<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponseBody\data\specHistory;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mixed[][]
     */
    public $resource;

    /**
     * @var mixed[][]
     */
    public $shard;

    /**
     * @var specHistory[]
     */
    public $specHistory;

    /**
     * @var mixed[][]
     */
    public $storage;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'instanceId' => 'InstanceId',
        'resource' => 'Resource',
        'shard' => 'Shard',
        'specHistory' => 'SpecHistory',
        'storage' => 'Storage',
    ];

    public function validate()
    {
        if (\is_array($this->bandwidth)) {
            Model::validateArray($this->bandwidth);
        }
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
        }
        if (\is_array($this->shard)) {
            Model::validateArray($this->shard);
        }
        if (\is_array($this->specHistory)) {
            Model::validateArray($this->specHistory);
        }
        if (\is_array($this->storage)) {
            Model::validateArray($this->storage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            if (\is_array($this->bandwidth)) {
                $res['Bandwidth'] = [];
                $n1 = 0;
                foreach ($this->bandwidth as $item1) {
                    if (\is_array($item1)) {
                        $res['Bandwidth'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Bandwidth'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['Resource'] = [];
                $n1 = 0;
                foreach ($this->resource as $item1) {
                    if (\is_array($item1)) {
                        $res['Resource'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Resource'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->shard) {
            if (\is_array($this->shard)) {
                $res['Shard'] = [];
                $n1 = 0;
                foreach ($this->shard as $item1) {
                    if (\is_array($item1)) {
                        $res['Shard'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Shard'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->specHistory) {
            if (\is_array($this->specHistory)) {
                $res['SpecHistory'] = [];
                $n1 = 0;
                foreach ($this->specHistory as $item1) {
                    $res['SpecHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->storage) {
            if (\is_array($this->storage)) {
                $res['Storage'] = [];
                $n1 = 0;
                foreach ($this->storage as $item1) {
                    if (\is_array($item1)) {
                        $res['Storage'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Storage'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['Bandwidth'])) {
            if (!empty($map['Bandwidth'])) {
                $model->bandwidth = [];
                $n1 = 0;
                foreach ($map['Bandwidth'] as $item1) {
                    if (!empty($item1)) {
                        $model->bandwidth[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->bandwidth[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n1 = 0;
                foreach ($map['Resource'] as $item1) {
                    if (!empty($item1)) {
                        $model->resource[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->resource[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['Shard'])) {
            if (!empty($map['Shard'])) {
                $model->shard = [];
                $n1 = 0;
                foreach ($map['Shard'] as $item1) {
                    if (!empty($item1)) {
                        $model->shard[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->shard[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['SpecHistory'])) {
            if (!empty($map['SpecHistory'])) {
                $model->specHistory = [];
                $n1 = 0;
                foreach ($map['SpecHistory'] as $item1) {
                    $model->specHistory[$n1++] = specHistory::fromMap($item1);
                }
            }
        }

        if (isset($map['Storage'])) {
            if (!empty($map['Storage'])) {
                $model->storage = [];
                $n1 = 0;
                foreach ($map['Storage'] as $item1) {
                    if (!empty($item1)) {
                        $model->storage[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->storage[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
