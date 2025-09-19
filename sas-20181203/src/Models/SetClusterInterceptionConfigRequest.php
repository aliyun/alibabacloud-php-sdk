<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SetClusterInterceptionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterIds;

    /**
     * @var int
     */
    public $switchOn;

    /**
     * @var int
     */
    public $switchType;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'switchOn' => 'SwitchOn',
        'switchType' => 'SwitchType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }

        if (null !== $this->switchOn) {
            $res['SwitchOn'] = $this->switchOn;
        }

        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
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
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }

        if (isset($map['SwitchOn'])) {
            $model->switchOn = $map['SwitchOn'];
        }

        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}
