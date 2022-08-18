<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class Destination extends Model {
    protected $_name = [
        'destination' => 'destination',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Destination
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['destination'])){
            $model->destination = $map['destination'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $destination;

}
