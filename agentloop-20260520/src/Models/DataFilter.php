<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class DataFilter extends Model
{
    /**
     * @var int
     */
    public $endTime;

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
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'maxRecords' => 'maxRecords',
        'provided' => 'provided',
        'query' => 'query',
        'samplingRate' => 'samplingRate',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->provided)) {
            Model::validateArray($this->provided);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

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

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

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

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
