<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ExecDatamaskRequest extends Model
{
    /**
     * @description The sensitive data to be de-identified. The value is a JSON string that contains the following parameters:
     *
     *   **dataHeaderList**: the names of the columns in which data needs to be de-identified. Specify the column names in accordance with the order of data that needs to be de-identified.
     *   **dataList**: the data that needs to be de-identified.
     *   **ruleList**: the IDs of sensitive data detection rules used to detect data that needs to be de-identified. Specify the rule IDs in accordance with the order of data that needs to be de-identified. Each ID identifies a sensitive data detection rule that is used to detect a type of sensitive data. You can call the [DescribeRules](~~DescribeRules~~) operation to query the IDs of sensitive data detection rules.
     *
     * @example {"dataHeaderList":["name","age"],"dataList":[["lily",18],["lucy",17]],"ruleList":[1002,null]}
     *
     * @var string
     */
    public $data;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Simplified Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the de-identification template. The ID is generated after you create the de-identification template in the [Data Security Center (DSC) console](https://yundun.console.aliyun.com/?\&p=sddpnext#/sddp/dm/template). You can choose **Data desensitization** > **Desensitization Template** in the left-side navigation pane and obtain the ID of the de-identification template from the **Desensitization Template** page.
     *
     *   If you select **Field name** as the matching mode of the template, DSC matches data based on the columns specified by the **dataHeaderList** parameter in the **Data** parameter.
     *   If you select **Sensitive type** as the matching mode of the template, DSC matches data based on the sensitive data detection rules specified by the **ruleList** parameter in the **Data** parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'data'        => 'Data',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
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
     * @return ExecDatamaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
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
