<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $uploadTokenType;
    protected $_name = [
        'appId'           => 'AppId',
        'materialId'      => 'MaterialId',
        'moduleId'        => 'ModuleId',
        'source'          => 'Source',
        'uploadTokenType' => 'UploadTokenType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->uploadTokenType) {
            $res['UploadTokenType'] = $this->uploadTokenType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UploadTokenType'])) {
            $model->uploadTokenType = $map['UploadTokenType'];
        }

        return $model;
    }
}
