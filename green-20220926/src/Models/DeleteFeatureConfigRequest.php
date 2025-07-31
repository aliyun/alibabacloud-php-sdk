<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class DeleteFeatureConfigRequest extends Model
{
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
     * @return DeleteFeatureConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
