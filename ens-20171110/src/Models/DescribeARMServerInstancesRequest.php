<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesRequest\tags;

class DescribeARMServerInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $AICSpecs;

    /**
     * @var bool
     */
    public $describeAICInstances;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $maxDate;

    /**
     * @var string
     */
    public $minDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $orderByParams;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $serverIds;

    /**
     * @var string[]
     */
    public $serverSpecs;

    /**
     * @var string[]
     */
    public $states;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'AICSpecs' => 'AICSpecs',
        'describeAICInstances' => 'DescribeAICInstances',
        'ensRegionIds' => 'EnsRegionIds',
        'maxDate' => 'MaxDate',
        'minDate' => 'MinDate',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'orderByParams' => 'OrderByParams',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'serverIds' => 'ServerIds',
        'serverSpecs' => 'ServerSpecs',
        'states' => 'States',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->AICSpecs)) {
            Model::validateArray($this->AICSpecs);
        }
        if (\is_array($this->ensRegionIds)) {
            Model::validateArray($this->ensRegionIds);
        }
        if (\is_array($this->serverIds)) {
            Model::validateArray($this->serverIds);
        }
        if (\is_array($this->serverSpecs)) {
            Model::validateArray($this->serverSpecs);
        }
        if (\is_array($this->states)) {
            Model::validateArray($this->states);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AICSpecs) {
            if (\is_array($this->AICSpecs)) {
                $res['AICSpecs'] = [];
                $n1 = 0;
                foreach ($this->AICSpecs as $item1) {
                    $res['AICSpecs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->describeAICInstances) {
            $res['DescribeAICInstances'] = $this->describeAICInstances;
        }

        if (null !== $this->ensRegionIds) {
            if (\is_array($this->ensRegionIds)) {
                $res['EnsRegionIds'] = [];
                $n1 = 0;
                foreach ($this->ensRegionIds as $item1) {
                    $res['EnsRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }

        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->serverIds) {
            if (\is_array($this->serverIds)) {
                $res['ServerIds'] = [];
                $n1 = 0;
                foreach ($this->serverIds as $item1) {
                    $res['ServerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverSpecs) {
            if (\is_array($this->serverSpecs)) {
                $res['ServerSpecs'] = [];
                $n1 = 0;
                foreach ($this->serverSpecs as $item1) {
                    $res['ServerSpecs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->states) {
            if (\is_array($this->states)) {
                $res['States'] = [];
                $n1 = 0;
                foreach ($this->states as $item1) {
                    $res['States'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AICSpecs'])) {
            if (!empty($map['AICSpecs'])) {
                $model->AICSpecs = [];
                $n1 = 0;
                foreach ($map['AICSpecs'] as $item1) {
                    $model->AICSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DescribeAICInstances'])) {
            $model->describeAICInstances = $map['DescribeAICInstances'];
        }

        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = [];
                $n1 = 0;
                foreach ($map['EnsRegionIds'] as $item1) {
                    $model->ensRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }

        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = [];
                $n1 = 0;
                foreach ($map['ServerIds'] as $item1) {
                    $model->serverIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerSpecs'])) {
            if (!empty($map['ServerSpecs'])) {
                $model->serverSpecs = [];
                $n1 = 0;
                foreach ($map['ServerSpecs'] as $item1) {
                    $model->serverSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['States'])) {
            if (!empty($map['States'])) {
                $model->states = [];
                $n1 = 0;
                foreach ($map['States'] as $item1) {
                    $model->states[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
