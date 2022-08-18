<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class SourceMNSParameters extends Model {
    protected $_name = [
        'isBase64Decode' => 'IsBase64Decode',
        'queueName' => 'QueueName',
        'regionId' => 'RegionId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isBase64Decode) {
            $res['IsBase64Decode'] = $this->isBase64Decode;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SourceMNSParameters
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['IsBase64Decode'])){
            $model->isBase64Decode = $map['IsBase64Decode'];
        }
        if(isset($map['QueueName'])){
            $model->queueName = $map['QueueName'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $isBase64Decode;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $regionId;

}
