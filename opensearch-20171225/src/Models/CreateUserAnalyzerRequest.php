<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateUserAnalyzerRequest extends Model
{
    /**
     * @description 基础分词器
     *
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $businessAppGroupId;

    /**
     * @description 基础分词器类型 (AUTO, MODEL, SYSTEM, USER)
     *
     * @var string
     */
    public $businessType;

    /**
     * @description 名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 引擎类型 (HA3, ES)
     *
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'business'           => 'business',
        'businessAppGroupId' => 'businessAppGroupId',
        'businessType'       => 'businessType',
        'name'               => 'name',
        'type'               => 'type',
        'dryRun'             => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['business'] = $this->business;
        }
        if (null !== $this->businessAppGroupId) {
            $res['businessAppGroupId'] = $this->businessAppGroupId;
        }
        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserAnalyzerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business'])) {
            $model->business = $map['business'];
        }
        if (isset($map['businessAppGroupId'])) {
            $model->businessAppGroupId = $map['businessAppGroupId'];
        }
        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
