<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\OutputCodeLocation;

class CreateLayerVersionResponseBody extends Model {
    protected $_name = [
        'acl' => 'acl',
        'arn' => 'arn',
        'code' => 'code',
        'codeChecksum' => 'codeChecksum',
        'codesize' => 'codesize',
        'compatibleRuntime' => 'compatibleRuntime',
        'createTime' => 'createTime',
        'description' => 'description',
        'layerName' => 'layerName',
        'version' => 'version',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }
        if (null !== $this->codesize) {
            $res['codesize'] = $this->codesize;
        }
        if (null !== $this->compatibleRuntime) {
            $res['compatibleRuntime'] = $this->compatibleRuntime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->layerName) {
            $res['layerName'] = $this->layerName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateLayerVersionResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['acl'])){
            $model->acl = $map['acl'];
        }
        if(isset($map['arn'])){
            $model->arn = $map['arn'];
        }
        if(isset($map['code'])){
            $model->code = OutputCodeLocation::fromMap($map['code']);
        }
        if(isset($map['codeChecksum'])){
            $model->codeChecksum = $map['codeChecksum'];
        }
        if(isset($map['codesize'])){
            $model->codesize = $map['codesize'];
        }
        if(isset($map['compatibleRuntime'])){
            if(!empty($map['compatibleRuntime'])){
                $model->compatibleRuntime = $map['compatibleRuntime'];
            }
        }
        if(isset($map['createTime'])){
            $model->createTime = $map['createTime'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['layerName'])){
            $model->layerName = $map['layerName'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $acl;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var OutputCodeLocation
     */
    public $code;

    /**
     * @var string
     */
    public $codeChecksum;

    /**
     * @var int
     */
    public $codesize;

    /**
     * @var string[]
     */
    public $compatibleRuntime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $layerName;

    /**
     * @var int
     */
    public $version;

}
