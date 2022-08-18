<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class MnsTopicTriggerConfig extends Model {
    protected $_name = [
        'filterTag' => 'filterTag',
        'notifyContentFormat' => 'notifyContentFormat',
        'notifyStrategy' => 'notifyStrategy',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->filterTag) {
            $res['filterTag'] = $this->filterTag;
        }
        if (null !== $this->notifyContentFormat) {
            $res['notifyContentFormat'] = $this->notifyContentFormat;
        }
        if (null !== $this->notifyStrategy) {
            $res['notifyStrategy'] = $this->notifyStrategy;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return MnsTopicTriggerConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['filterTag'])){
            $model->filterTag = $map['filterTag'];
        }
        if(isset($map['notifyContentFormat'])){
            $model->notifyContentFormat = $map['notifyContentFormat'];
        }
        if(isset($map['notifyStrategy'])){
            $model->notifyStrategy = $map['notifyStrategy'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $filterTag;

    /**
     * @var string
     */
    public $notifyContentFormat;

    /**
     * @var string
     */
    public $notifyStrategy;

}
