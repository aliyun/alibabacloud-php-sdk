<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class AsyncConfigMeta extends Model {
    protected $_name = [
        'functionName' => 'functionName',
        'qualifier' => 'qualifier',
        'serviceName' => 'serviceName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AsyncConfigMeta
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['functionName'])){
            $model->functionName = $map['functionName'];
        }
        if(isset($map['qualifier'])){
            $model->qualifier = $map['qualifier'];
        }
        if(isset($map['serviceName'])){
            $model->serviceName = $map['serviceName'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $serviceName;

}
