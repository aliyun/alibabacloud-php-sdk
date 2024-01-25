<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliverableRequest;

use AlibabaCloud\Tea\Model;

class foundation extends Model
{
    /**
     * @var string
     */
    public $clusterConfig;

    /**
     * @example 1c70d948-a94f-4371-9bc1-8979b01cedfe
     *
     * @var string
     */
    public $foundationReferenceUID;

    /**
     * @example 1.4.2
     *
     * @var string
     */
    public $foundationVersion;

    /**
     * @example 484c4a1e-69c7-4395-8e02-d461b6894076
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @var bool
     */
    public $reusable;
    protected $_name = [
        'clusterConfig'          => 'clusterConfig',
        'foundationReferenceUID' => 'foundationReferenceUID',
        'foundationVersion'      => 'foundationVersion',
        'foundationVersionUID'   => 'foundationVersionUID',
        'reusable'               => 'reusable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfig) {
            $res['clusterConfig'] = $this->clusterConfig;
        }
        if (null !== $this->foundationReferenceUID) {
            $res['foundationReferenceUID'] = $this->foundationReferenceUID;
        }
        if (null !== $this->foundationVersion) {
            $res['foundationVersion'] = $this->foundationVersion;
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->reusable) {
            $res['reusable'] = $this->reusable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return foundation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterConfig'])) {
            $model->clusterConfig = $map['clusterConfig'];
        }
        if (isset($map['foundationReferenceUID'])) {
            $model->foundationReferenceUID = $map['foundationReferenceUID'];
        }
        if (isset($map['foundationVersion'])) {
            $model->foundationVersion = $map['foundationVersion'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['reusable'])) {
            $model->reusable = $map['reusable'];
        }

        return $model;
    }
}
