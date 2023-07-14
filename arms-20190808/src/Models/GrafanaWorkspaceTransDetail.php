<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

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
        'dashboardAmount'  => 'dashboardAmount',
        'dataSourceAmount' => 'dataSourceAmount',
        'original'         => 'original',
        'originalName'     => 'originalName',
        'target'           => 'target',
        'targetName'       => 'targetName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceTransDetail
     */
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
