<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class SourceConfig extends Model {
    protected $_name = [
        'logstore' => 'logstore',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SourceConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['logstore'])){
            $model->logstore = $map['logstore'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $logstore;

}
