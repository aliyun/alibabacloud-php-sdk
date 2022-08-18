<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\Destination;

class DestinationConfig extends Model {
    protected $_name = [
        'onFailure' => 'onFailure',
        'onSuccess' => 'onSuccess',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->onFailure) {
            $res['onFailure'] = null !== $this->onFailure ? $this->onFailure->toMap() : null;
        }
        if (null !== $this->onSuccess) {
            $res['onSuccess'] = null !== $this->onSuccess ? $this->onSuccess->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DestinationConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['onFailure'])){
            $model->onFailure = Destination::fromMap($map['onFailure']);
        }
        if(isset($map['onSuccess'])){
            $model->onSuccess = Destination::fromMap($map['onSuccess']);
        }
        return $model;
    }
    /**
     * @var Destination
     */
    public $onFailure;

    /**
     * @var Destination
     */
    public $onSuccess;

}
