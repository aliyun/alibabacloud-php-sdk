<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskLevelsRequest extends Model
{
    /**
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   zh_cn: Chinese (default)
     *   en_us: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the industry-specific rule template.
     *
     * @example 1
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'featureType' => 'FeatureType',
        'lang'        => 'Lang',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskLevelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
