<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class CreateReservedNodePoolRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hostPostfix;

    /**
     * @var string
     */
    public $hostPrefix;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'count' => 'Count',
        'description' => 'Description',
        'hostPostfix' => 'HostPostfix',
        'hostPrefix' => 'HostPrefix',
        'name' => 'Name',
        'vSwitchId' => 'VSwitchId',
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

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hostPostfix) {
            $res['HostPostfix'] = $this->hostPostfix;
        }

        if (null !== $this->hostPrefix) {
            $res['HostPrefix'] = $this->hostPrefix;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HostPostfix'])) {
            $model->hostPostfix = $map['HostPostfix'];
        }

        if (isset($map['HostPrefix'])) {
            $model->hostPrefix = $map['HostPrefix'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
