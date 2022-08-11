<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model {
    protected $_name = [
        'instanceId' => 'instanceId',
        'versionId' => 'versionId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return instances
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instanceId'])){
            $model->instanceId = $map['instanceId'];
        }
        if(isset($map['versionId'])){
            $model->versionId = $map['versionId'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $versionId;

}
