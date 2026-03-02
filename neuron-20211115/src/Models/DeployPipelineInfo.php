<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class DeployPipelineInfo extends Model
{
    /**
     * @var DeployInstanceInfo[]
     */
    public $deployInstanceInfos;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'deployInstanceInfos' => 'deployInstanceInfos',
        'id' => 'id',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->deployInstanceInfos)) {
            Model::validateArray($this->deployInstanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployInstanceInfos) {
            if (\is_array($this->deployInstanceInfos)) {
                $res['deployInstanceInfos'] = [];
                $n1 = 0;
                foreach ($this->deployInstanceInfos as $item1) {
                    $res['deployInstanceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['deployInstanceInfos'])) {
            if (!empty($map['deployInstanceInfos'])) {
                $model->deployInstanceInfos = [];
                $n1 = 0;
                foreach ($map['deployInstanceInfos'] as $item1) {
                    $model->deployInstanceInfos[$n1] = DeployInstanceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
