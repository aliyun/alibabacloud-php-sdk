<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetFeatureConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description List of feature configurations
     *
     * @var mixed[][]
     */
    public $featureConf;

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

    /**
     * @description UID.
     *
     * @example 1643953****74290
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'featureConf' => 'FeatureConf',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'type' => 'Type',
        'uid' => 'Uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConf) {
            $res['FeatureConf'] = $this->featureConf;
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
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConf'])) {
            if (!empty($map['FeatureConf'])) {
                $model->featureConf = $map['FeatureConf'];
            }
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
