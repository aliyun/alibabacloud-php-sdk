<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class Resource extends Model {
    protected $_name = [
        'resourceArn' => 'resourceArn',
        'tags' => 'tags',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Resource
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['resourceArn'])){
            $model->resourceArn = $map['resourceArn'];
        }
        if(isset($map['tags'])){
            $model->tags = $map['tags'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string[]
     */
    public $tags;

}
