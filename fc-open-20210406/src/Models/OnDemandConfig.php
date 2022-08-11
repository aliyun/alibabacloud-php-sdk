<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class OnDemandConfig extends Model {
    protected $_name = [
        'maximumInstanceCount' => 'maximumInstanceCount',
        'resource' => 'resource',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->maximumInstanceCount) {
            $res['maximumInstanceCount'] = $this->maximumInstanceCount;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OnDemandConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['maximumInstanceCount'])){
            $model->maximumInstanceCount = $map['maximumInstanceCount'];
        }
        if(isset($map['resource'])){
            $model->resource = $map['resource'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $maximumInstanceCount;

    /**
     * @var string
     */
    public $resource;

}
