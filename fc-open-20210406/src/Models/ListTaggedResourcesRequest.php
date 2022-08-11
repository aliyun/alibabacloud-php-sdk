<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListTaggedResourcesRequest extends Model {
    protected $_name = [
        'limit' => 'limit',
        'nextToken' => 'nextToken',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListTaggedResourcesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['limit'])){
            $model->limit = $map['limit'];
        }
        if(isset($map['nextToken'])){
            $model->nextToken = $map['nextToken'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

}
