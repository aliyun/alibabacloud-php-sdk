<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model {
    protected $_name = [
        'instanceIds' => 'instanceIds',
        'limit' => 'limit',
        'qualifier' => 'qualifier',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListInstancesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instanceIds'])){
            if(!empty($map['instanceIds'])){
                $model->instanceIds = $map['instanceIds'];
            }
        }
        if(isset($map['limit'])){
            $model->limit = $map['limit'];
        }
        if(isset($map['qualifier'])){
            $model->qualifier = $map['qualifier'];
        }
        return $model;
    }
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $qualifier;

}
