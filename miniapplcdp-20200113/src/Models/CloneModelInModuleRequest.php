<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class CloneModelInModuleRequest extends Model
{
    /**
     * @var string
     */
    public $modelId;

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
    public $targetName;

    /**
     * @var string
     */
    public $targetSubType;
    protected $_name = [
        'modelId'       => 'ModelId',
        'moduleId'      => 'ModuleId',
        'source'        => 'Source',
        'targetName'    => 'TargetName',
        'targetSubType' => 'TargetSubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetSubType) {
            $res['TargetSubType'] = $this->targetSubType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneModelInModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetSubType'])) {
            $model->targetSubType = $map['TargetSubType'];
        }

        return $model;
    }
}
