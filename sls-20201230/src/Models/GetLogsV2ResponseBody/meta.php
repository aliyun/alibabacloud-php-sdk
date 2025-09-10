<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody\meta\phraseQueryInfo;
use AlibabaCloud\SDK\Sls\V20201230\Models\LogContent;

class meta extends Model
{
    /**
     * @var string
     */
    public $aggQuery;

    /**
     * @var string[]
     */
    public $columnTypes;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var float
     */
    public $cpuSec;

    /**
     * @var int
     */
    public $elapsedMillisecond;

    /**
     * @var bool
     */
    public $hasSQL;

    /**
     * @var LogContent[][]
     */
    public $highlights;

    /**
     * @var bool
     */
    public $isAccurate;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var int
     */
    public $limited;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var phraseQueryInfo
     */
    public $phraseQueryInfo;

    /**
     * @var int
     */
    public $processedBytes;

    /**
     * @var int
     */
    public $processedRows;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $scanBytes;

    /**
     * @var string
     */
    public $telementryType;

    /**
     * @var mixed[][]
     */
    public $terms;

    /**
     * @var string
     */
    public $whereQuery;
    protected $_name = [
        'aggQuery' => 'aggQuery',
        'columnTypes' => 'columnTypes',
        'count' => 'count',
        'cpuCores' => 'cpuCores',
        'cpuSec' => 'cpuSec',
        'elapsedMillisecond' => 'elapsedMillisecond',
        'hasSQL' => 'hasSQL',
        'highlights' => 'highlights',
        'isAccurate' => 'isAccurate',
        'keys' => 'keys',
        'limited' => 'limited',
        'mode' => 'mode',
        'phraseQueryInfo' => 'phraseQueryInfo',
        'processedBytes' => 'processedBytes',
        'processedRows' => 'processedRows',
        'progress' => 'progress',
        'scanBytes' => 'scanBytes',
        'telementryType' => 'telementryType',
        'terms' => 'terms',
        'whereQuery' => 'whereQuery',
    ];

    public function validate()
    {
        if (\is_array($this->columnTypes)) {
            Model::validateArray($this->columnTypes);
        }
        if (\is_array($this->highlights)) {
            Model::validateArray($this->highlights);
        }
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        if (null !== $this->phraseQueryInfo) {
            $this->phraseQueryInfo->validate();
        }
        if (\is_array($this->terms)) {
            Model::validateArray($this->terms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggQuery) {
            $res['aggQuery'] = $this->aggQuery;
        }

        if (null !== $this->columnTypes) {
            if (\is_array($this->columnTypes)) {
                $res['columnTypes'] = [];
                $n1 = 0;
                foreach ($this->columnTypes as $item1) {
                    $res['columnTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }

        if (null !== $this->cpuSec) {
            $res['cpuSec'] = $this->cpuSec;
        }

        if (null !== $this->elapsedMillisecond) {
            $res['elapsedMillisecond'] = $this->elapsedMillisecond;
        }

        if (null !== $this->hasSQL) {
            $res['hasSQL'] = $this->hasSQL;
        }

        if (null !== $this->highlights) {
            if (\is_array($this->highlights)) {
                $res['highlights'] = [];
                $n1 = 0;
                foreach ($this->highlights as $item1) {
                    if (\is_array($item1)) {
                        $res['highlights'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['highlights'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->isAccurate) {
            $res['isAccurate'] = $this->isAccurate;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->limited) {
            $res['limited'] = $this->limited;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->phraseQueryInfo) {
            $res['phraseQueryInfo'] = null !== $this->phraseQueryInfo ? $this->phraseQueryInfo->toArray($noStream) : $this->phraseQueryInfo;
        }

        if (null !== $this->processedBytes) {
            $res['processedBytes'] = $this->processedBytes;
        }

        if (null !== $this->processedRows) {
            $res['processedRows'] = $this->processedRows;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->scanBytes) {
            $res['scanBytes'] = $this->scanBytes;
        }

        if (null !== $this->telementryType) {
            $res['telementryType'] = $this->telementryType;
        }

        if (null !== $this->terms) {
            if (\is_array($this->terms)) {
                $res['terms'] = [];
                $n1 = 0;
                foreach ($this->terms as $item1) {
                    if (\is_array($item1)) {
                        $res['terms'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['terms'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->whereQuery) {
            $res['whereQuery'] = $this->whereQuery;
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
        if (isset($map['aggQuery'])) {
            $model->aggQuery = $map['aggQuery'];
        }

        if (isset($map['columnTypes'])) {
            if (!empty($map['columnTypes'])) {
                $model->columnTypes = [];
                $n1 = 0;
                foreach ($map['columnTypes'] as $item1) {
                    $model->columnTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }

        if (isset($map['cpuSec'])) {
            $model->cpuSec = $map['cpuSec'];
        }

        if (isset($map['elapsedMillisecond'])) {
            $model->elapsedMillisecond = $map['elapsedMillisecond'];
        }

        if (isset($map['hasSQL'])) {
            $model->hasSQL = $map['hasSQL'];
        }

        if (isset($map['highlights'])) {
            if (!empty($map['highlights'])) {
                $model->highlights = [];
                $n1 = 0;
                foreach ($map['highlights'] as $item1) {
                    if (!empty($item1)) {
                        $model->highlights[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->highlights[$n1][$n2] = LogContent::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['isAccurate'])) {
            $model->isAccurate = $map['isAccurate'];
        }

        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['limited'])) {
            $model->limited = $map['limited'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['phraseQueryInfo'])) {
            $model->phraseQueryInfo = phraseQueryInfo::fromMap($map['phraseQueryInfo']);
        }

        if (isset($map['processedBytes'])) {
            $model->processedBytes = $map['processedBytes'];
        }

        if (isset($map['processedRows'])) {
            $model->processedRows = $map['processedRows'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['scanBytes'])) {
            $model->scanBytes = $map['scanBytes'];
        }

        if (isset($map['telementryType'])) {
            $model->telementryType = $map['telementryType'];
        }

        if (isset($map['terms'])) {
            if (!empty($map['terms'])) {
                $model->terms = [];
                $n1 = 0;
                foreach ($map['terms'] as $item1) {
                    if (!empty($item1)) {
                        $model->terms[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->terms[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['whereQuery'])) {
            $model->whereQuery = $map['whereQuery'];
        }

        return $model;
    }
}
