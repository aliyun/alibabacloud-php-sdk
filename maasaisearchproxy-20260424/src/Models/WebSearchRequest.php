<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models;

use AlibabaCloud\Dara\Model;

class WebSearchRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $excludeDomain;

    /**
     * @var string[]
     */
    public $includeDomain;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'excludeDomain' => 'excludeDomain',
        'includeDomain' => 'includeDomain',
        'limit' => 'limit',
        'query' => 'query',
        'region' => 'region',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->excludeDomain)) {
            Model::validateArray($this->excludeDomain);
        }
        if (\is_array($this->includeDomain)) {
            Model::validateArray($this->includeDomain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->excludeDomain) {
            if (\is_array($this->excludeDomain)) {
                $res['excludeDomain'] = [];
                $n1 = 0;
                foreach ($this->excludeDomain as $item1) {
                    $res['excludeDomain'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeDomain) {
            if (\is_array($this->includeDomain)) {
                $res['includeDomain'] = [];
                $n1 = 0;
                foreach ($this->includeDomain as $item1) {
                    $res['includeDomain'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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

        if (isset($map['excludeDomain'])) {
            if (!empty($map['excludeDomain'])) {
                $model->excludeDomain = [];
                $n1 = 0;
                foreach ($map['excludeDomain'] as $item1) {
                    $model->excludeDomain[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['includeDomain'])) {
            if (!empty($map['includeDomain'])) {
                $model->includeDomain = [];
                $n1 = 0;
                foreach ($map['includeDomain'] as $item1) {
                    $model->includeDomain[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
