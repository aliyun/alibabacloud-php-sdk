<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20181015\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceTransDetail extends Model
{
    /**
     * @var int
     */
    public $dashboardAmount;

    /**
     * @var int
     */
    public $dataSourceAmount;

    /**
     * @var int
     */
    public $original;

    /**
     * @var string
     */
    public $originalName;

    /**
     * @var int
     */
    public $target;

    /**
     * @var string
     */
    public $targetName;
    protected $_name = [
        'dashboardAmount' => 'dashboardAmount',
        'dataSourceAmount' => 'dataSourceAmount',
        'original' => 'original',
        'originalName' => 'originalName',
        'target' => 'target',
        'targetName' => 'targetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardAmount) {
            $res['dashboardAmount'] = $this->dashboardAmount;
        }

        if (null !== $this->dataSourceAmount) {
            $res['dataSourceAmount'] = $this->dataSourceAmount;
        }

        if (null !== $this->original) {
            $res['original'] = $this->original;
        }

        if (null !== $this->originalName) {
            $res['originalName'] = $this->originalName;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->targetName) {
            $res['targetName'] = $this->targetName;
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
        if (isset($map['dashboardAmount'])) {
            $model->dashboardAmount = $map['dashboardAmount'];
        }

        if (isset($map['dataSourceAmount'])) {
            $model->dataSourceAmount = $map['dataSourceAmount'];
        }

        if (isset($map['original'])) {
            $model->original = $map['original'];
        }

        if (isset($map['originalName'])) {
            $model->originalName = $map['originalName'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['targetName'])) {
            $model->targetName = $map['targetName'];
        }

        return $model;
    }
}
