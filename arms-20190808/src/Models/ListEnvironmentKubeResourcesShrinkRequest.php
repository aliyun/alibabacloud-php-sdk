<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListEnvironmentKubeResourcesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $labelSelectorsShrink;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environmentId'        => 'EnvironmentId',
        'kind'                 => 'Kind',
        'labelSelectorsShrink' => 'LabelSelectors',
        'namespace'            => 'Namespace',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->labelSelectorsShrink) {
            $res['LabelSelectors'] = $this->labelSelectorsShrink;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['LabelSelectors'])) {
            $model->labelSelectorsShrink = $map['LabelSelectors'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
