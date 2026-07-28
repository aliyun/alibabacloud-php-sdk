<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class DescribeSlowQueryStatsResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $byDatabase;

    /**
     * @var mixed
     */
    public $byTimeBucket;

    /**
     * @var mixed
     */
    public $byUser;

    /**
     * @var mixed[]
     */
    public $percentiles;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $summary;

    /**
     * @var mixed
     */
    public $topQueries;

    /**
     * @var mixed
     */
    public $topSqlDigests;
    protected $_name = [
        'byDatabase' => 'ByDatabase',
        'byTimeBucket' => 'ByTimeBucket',
        'byUser' => 'ByUser',
        'percentiles' => 'Percentiles',
        'requestId' => 'RequestId',
        'summary' => 'Summary',
        'topQueries' => 'TopQueries',
        'topSqlDigests' => 'TopSqlDigests',
    ];

    public function validate()
    {
        if (\is_array($this->percentiles)) {
            Model::validateArray($this->percentiles);
        }
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byDatabase) {
            $res['ByDatabase'] = $this->byDatabase;
        }

        if (null !== $this->byTimeBucket) {
            $res['ByTimeBucket'] = $this->byTimeBucket;
        }

        if (null !== $this->byUser) {
            $res['ByUser'] = $this->byUser;
        }

        if (null !== $this->percentiles) {
            if (\is_array($this->percentiles)) {
                $res['Percentiles'] = [];
                foreach ($this->percentiles as $key1 => $value1) {
                    $res['Percentiles'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->summary) {
            if (\is_array($this->summary)) {
                $res['Summary'] = [];
                foreach ($this->summary as $key1 => $value1) {
                    $res['Summary'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->topQueries) {
            $res['TopQueries'] = $this->topQueries;
        }

        if (null !== $this->topSqlDigests) {
            $res['TopSqlDigests'] = $this->topSqlDigests;
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
        if (isset($map['ByDatabase'])) {
            $model->byDatabase = $map['ByDatabase'];
        }

        if (isset($map['ByTimeBucket'])) {
            $model->byTimeBucket = $map['ByTimeBucket'];
        }

        if (isset($map['ByUser'])) {
            $model->byUser = $map['ByUser'];
        }

        if (isset($map['Percentiles'])) {
            if (!empty($map['Percentiles'])) {
                $model->percentiles = [];
                foreach ($map['Percentiles'] as $key1 => $value1) {
                    $model->percentiles[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                foreach ($map['Summary'] as $key1 => $value1) {
                    $model->summary[$key1] = $value1;
                }
            }
        }

        if (isset($map['TopQueries'])) {
            $model->topQueries = $map['TopQueries'];
        }

        if (isset($map['TopSqlDigests'])) {
            $model->topSqlDigests = $map['TopSqlDigests'];
        }

        return $model;
    }
}
