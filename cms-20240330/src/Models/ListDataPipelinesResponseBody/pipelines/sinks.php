<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListDataPipelinesResponseBody\pipelines;

use AlibabaCloud\Dara\Model;

class sinks extends Model
{
    /**
     * @var string[]
     */
    public $datasets;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'datasets' => 'datasets',
        'logstore' => 'logstore',
        'name' => 'name',
        'project' => 'project',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['datasets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['datasets'])) {
            if (!empty($map['datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['datasets'] as $item1) {
                    $model->datasets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
