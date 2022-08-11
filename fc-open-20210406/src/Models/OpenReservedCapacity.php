<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class OpenReservedCapacity extends Model {
    protected $_name = [
        'createdTime' => 'createdTime',
        'cu' => 'cu',
        'deadline' => 'deadline',
        'instanceId' => 'instanceId',
        'isRefunded' => 'isRefunded',
        'lastModifiedTime' => 'lastModifiedTime',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }
        if (null !== $this->deadline) {
            $res['deadline'] = $this->deadline;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->isRefunded) {
            $res['isRefunded'] = $this->isRefunded;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OpenReservedCapacity
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['createdTime'])){
            $model->createdTime = $map['createdTime'];
        }
        if(isset($map['cu'])){
            $model->cu = $map['cu'];
        }
        if(isset($map['deadline'])){
            $model->deadline = $map['deadline'];
        }
        if(isset($map['instanceId'])){
            $model->instanceId = $map['instanceId'];
        }
        if(isset($map['isRefunded'])){
            $model->isRefunded = $map['isRefunded'];
        }
        if(isset($map['lastModifiedTime'])){
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var string
     */
    public $deadline;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $isRefunded;

    /**
     * @var string
     */
    public $lastModifiedTime;

}
