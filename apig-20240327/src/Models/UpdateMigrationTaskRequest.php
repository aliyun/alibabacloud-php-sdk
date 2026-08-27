<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMigrationTaskRequest\virtualServices;

class UpdateMigrationTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clusterNamespace;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $switchType;

    /**
     * @var string
     */
    public $target;

    /**
     * @var virtualServices[]
     */
    public $virtualServices;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'clusterNamespace' => 'clusterNamespace',
        'description' => 'description',
        'serviceName' => 'serviceName',
        'slbId' => 'slbId',
        'switchType' => 'switchType',
        'target' => 'target',
        'virtualServices' => 'virtualServices',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (\is_array($this->virtualServices)) {
            Model::validateArray($this->virtualServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNamespace) {
            $res['clusterNamespace'] = $this->clusterNamespace;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->slbId) {
            $res['slbId'] = $this->slbId;
        }

        if (null !== $this->switchType) {
            $res['switchType'] = $this->switchType;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->virtualServices) {
            if (\is_array($this->virtualServices)) {
                $res['virtualServices'] = [];
                $n1 = 0;
                foreach ($this->virtualServices as $item1) {
                    $res['virtualServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['clusterNamespace'])) {
            $model->clusterNamespace = $map['clusterNamespace'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['slbId'])) {
            $model->slbId = $map['slbId'];
        }

        if (isset($map['switchType'])) {
            $model->switchType = $map['switchType'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['virtualServices'])) {
            if (!empty($map['virtualServices'])) {
                $model->virtualServices = [];
                $n1 = 0;
                foreach ($map['virtualServices'] as $item1) {
                    $model->virtualServices[$n1] = virtualServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
