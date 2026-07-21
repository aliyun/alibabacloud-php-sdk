<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class DataFilter extends Model
{
    /**
     * @var int
     */
    public $maxRecords;

    /**
     * @var mixed[]
     */
    public $provided;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $samplingRate;

    /**
     * @var string[]
     */
    public $serviceNames;
    protected $_name = [
        'maxRecords' => 'maxRecords',
        'provided' => 'provided',
        'query' => 'query',
        'samplingRate' => 'samplingRate',
        'serviceNames' => 'serviceNames',
    ];

    public function validate()
    {
        if (\is_array($this->provided)) {
            Model::validateArray($this->provided);
        }
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxRecords) {
            $res['maxRecords'] = $this->maxRecords;
        }

        if (null !== $this->provided) {
            if (\is_array($this->provided)) {
                $res['provided'] = [];
                foreach ($this->provided as $key1 => $value1) {
                    $res['provided'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->samplingRate) {
            $res['samplingRate'] = $this->samplingRate;
        }

        if (null !== $this->serviceNames) {
            if (\is_array($this->serviceNames)) {
                $res['serviceNames'] = [];
                $n1 = 0;
                foreach ($this->serviceNames as $item1) {
                    $res['serviceNames'][$n1] = $item1;
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
        if (isset($map['maxRecords'])) {
            $model->maxRecords = $map['maxRecords'];
        }

        if (isset($map['provided'])) {
            if (!empty($map['provided'])) {
                $model->provided = [];
                foreach ($map['provided'] as $key1 => $value1) {
                    $model->provided[$key1] = $value1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['samplingRate'])) {
            $model->samplingRate = $map['samplingRate'];
        }

        if (isset($map['serviceNames'])) {
            if (!empty($map['serviceNames'])) {
                $model->serviceNames = [];
                $n1 = 0;
                foreach ($map['serviceNames'] as $item1) {
                    $model->serviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
