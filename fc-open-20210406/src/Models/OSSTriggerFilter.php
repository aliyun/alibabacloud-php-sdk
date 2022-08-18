<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\OSSTriggerKey;

class OSSTriggerFilter extends Model {
    protected $_name = [
        'key' => 'key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = null !== $this->key ? $this->key->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OSSTriggerFilter
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['key'])){
            $model->key = OSSTriggerKey::fromMap($map['key']);
        }
        return $model;
    }
    /**
     * @var OSSTriggerKey
     */
    public $key;

}
