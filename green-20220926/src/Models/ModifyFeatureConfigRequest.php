<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ModifyFeatureConfigRequest extends Model
{
    /**
     * @description Configuration, in JSON format
     *
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @description Label meaning
     *
     * @example 标签2
     *
     * @var string
     */
    public $description;

    /**
     * @description Label value, customer-defined
     *
     * @example __config__
     *
     * @var string
     */
    public $field;

    /**
     * @description Region
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource type.
     *
     * @example text
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Service code.
     *
     * @example llm_query_moderation
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description Type
     *
     * @example custom_llm_template
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'description' => 'Description',
        'field' => 'Field',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFeatureConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
