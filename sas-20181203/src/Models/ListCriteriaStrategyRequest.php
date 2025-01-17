<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCriteriaStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $imageName;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'imageName'    => 'ImageName',
        'label'        => 'Label',
        'namespace'    => 'Namespace',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
