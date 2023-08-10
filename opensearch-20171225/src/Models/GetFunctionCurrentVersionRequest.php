<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class GetFunctionCurrentVersionRequest extends Model
{
    /**
     * @description The category. By default, this parameter is left empty.
     *
     * @example general
     *
     * @var string
     */
    public $category;

    /**
     * @description The industry. By default, this parameter is left empty, which indicates General-purpose Edition.
     *
     * @example ecommerce
     *
     * @var string
     */
    public $domain;

    /**
     * @description The type of the feature. Valid values:
     *
     *   PAAS. This is the default value.
     *   SAAS.
     *
     * @example PAAS
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The type of the model. The following features correspond to different model types:
     *
     *   CTR model: tf_checkpoint
     *   Popularity model: pop
     *   Category model: offline_inference
     *   Hotword model: offline_inference
     *   Shading model: offline_inference
     *   Drop-down suggestion model: offline_inference
     *   Word segmentation model: text
     *   Word weight model: tf_checkpoint
     *
     * @example tf_checkpoint
     *
     * @var string
     */
    public $modelType;
    protected $_name = [
        'category'     => 'category',
        'domain'       => 'domain',
        'functionType' => 'functionType',
        'modelType'    => 'modelType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionCurrentVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        return $model;
    }
}
