<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\Code;

class CreateLayerVersionRequest extends Model {
    protected $_name = [
        'code' => 'Code',
        'compatibleRuntime' => 'compatibleRuntime',
        'description' => 'description',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->compatibleRuntime) {
            $res['compatibleRuntime'] = $this->compatibleRuntime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateLayerVersionRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Code'])){
            $model->code = Code::fromMap($map['Code']);
        }
        if(isset($map['compatibleRuntime'])){
            if(!empty($map['compatibleRuntime'])){
                $model->compatibleRuntime = $map['compatibleRuntime'];
            }
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        return $model;
    }
    /**
     * @var Code
     */
    public $code;

    /**
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @var string
     */
    public $description;

}
