<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\AccelerationInfo;

class CustomContainerConfigInfo extends Model {
    protected $_name = [
        'accelerationInfo' => 'accelerationInfo',
        'accelerationType' => 'accelerationType',
        'args' => 'args',
        'command' => 'command',
        'image' => 'image',
        'instanceID' => 'instanceID',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->accelerationInfo) {
            $res['accelerationInfo'] = null !== $this->accelerationInfo ? $this->accelerationInfo->toMap() : null;
        }
        if (null !== $this->accelerationType) {
            $res['accelerationType'] = $this->accelerationType;
        }
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }
        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CustomContainerConfigInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['accelerationInfo'])){
            $model->accelerationInfo = AccelerationInfo::fromMap($map['accelerationInfo']);
        }
        if(isset($map['accelerationType'])){
            $model->accelerationType = $map['accelerationType'];
        }
        if(isset($map['args'])){
            $model->args = $map['args'];
        }
        if(isset($map['command'])){
            $model->command = $map['command'];
        }
        if(isset($map['image'])){
            $model->image = $map['image'];
        }
        if(isset($map['instanceID'])){
            $model->instanceID = $map['instanceID'];
        }
        return $model;
    }
    /**
     * @var AccelerationInfo
     */
    public $accelerationInfo;

    /**
     * @var string
     */
    public $accelerationType;

    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $instanceID;

}
