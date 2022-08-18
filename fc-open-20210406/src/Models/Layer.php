<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\LayerCode;

class Layer extends Model {
    protected $_name = [
        'acl' => 'acl',
        'arn' => 'arn',
        'arnV2' => 'arnV2',
        'code' => 'code',
        'codeChecksum' => 'codeChecksum',
        'codeSize' => 'codeSize',
        'compatibleRuntime' => 'compatibleRuntime',
        'createTime' => 'createTime',
        'description' => 'description',
        'layerName' => 'layerName',
        'license' => 'license',
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
        if (null !== $this->arnV2) {
            $res['arnV2'] = $this->arnV2;
        }
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toMap() : null;
        }
        if (null !== $this->codeChecksum) {
            $res['codeChecksum'] = $this->codeChecksum;
        }
        if (null !== $this->codeSize) {
            $res['codeSize'] = $this->codeSize;
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
        if (null !== $this->license) {
            $res['license'] = $this->license;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Layer
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['acl'])){
            $model->acl = $map['acl'];
        }
        if(isset($map['arn'])){
            $model->arn = $map['arn'];
        }
        if(isset($map['arnV2'])){
            $model->arnV2 = $map['arnV2'];
        }
        if(isset($map['code'])){
            $model->code = LayerCode::fromMap($map['code']);
        }
        if(isset($map['codeChecksum'])){
            $model->codeChecksum = $map['codeChecksum'];
        }
        if(isset($map['codeSize'])){
            $model->codeSize = $map['codeSize'];
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
        if(isset($map['license'])){
            $model->license = $map['license'];
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
     * @var string
     */
    public $arnV2;

    /**
     * @var LayerCode
     */
    public $code;

    /**
     * @var string
     */
    public $codeChecksum;

    /**
     * @var int
     */
    public $codeSize;

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
     * @var string
     */
    public $license;

    /**
     * @var int
     */
    public $version;

}
