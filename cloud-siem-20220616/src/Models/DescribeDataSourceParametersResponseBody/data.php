<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody\data\paramValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the edit operation is supported. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example wafApi
     *
     * @var int
     */
    public $canEditted;

    /**
     * @description The code of the cloud service provider. Valid values:
     *
     *   qcloud: Tencent Cloud
     *   aliyun: Alibaba Cloud
     *   hcloud: Huawei Cloud
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The type of the data source. Valid values:
     *
     *   obs: Huawei Cloud OBS
     *   wafApi: download API of Tencent Cloud WAF
     *   ckafka: Tencent Cloud CKafka
     *
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The default value of the parameter.
     *
     * @example wafApi
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description Indicates whether the modification operation is forbidden. Valid values:
     *
     *   true
     *   false
     *
     * @example wafApi
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The method that is used to check the parameter format.
     *
     * @example email
     *
     * @var string
     */
    public $formatCheck;

    /**
     * @description The additional information.
     *
     * @example obs docment
     *
     * @var string
     */
    public $hit;

    /**
     * @description The code of the parameter.
     *
     * @example region_code
     *
     * @var string
     */
    public $paraCode;

    /**
     * @description The parameter level. Valid values:
     *
     *   1: data source
     *   2: log
     *
     * @example 1
     *
     * @var int
     */
    public $paraLevel;

    /**
     * @description The name of the parameter.
     *
     * @example region local
     *
     * @var string
     */
    public $paraName;

    /**
     * @description The data type of the parameter.
     *
     * @example string
     *
     * @var string
     */
    public $paraType;

    /**
     * @description The value of the parameter.
     *
     * @var paramValue[]
     */
    public $paramValue;

    /**
     * @description Indicates whether the parameter is required. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example string
     *
     * @var int
     */
    public $required;

    /**
     * @description The note on the parameter value.
     *
     * @example obs bucket name
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'canEditted'     => 'CanEditted',
        'cloudCode'      => 'CloudCode',
        'dataSourceType' => 'DataSourceType',
        'defaultValue'   => 'DefaultValue',
        'disabled'       => 'Disabled',
        'formatCheck'    => 'FormatCheck',
        'hit'            => 'Hit',
        'paraCode'       => 'ParaCode',
        'paraLevel'      => 'ParaLevel',
        'paraName'       => 'ParaName',
        'paraType'       => 'ParaType',
        'paramValue'     => 'ParamValue',
        'required'       => 'Required',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canEditted) {
            $res['CanEditted'] = $this->canEditted;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->formatCheck) {
            $res['FormatCheck'] = $this->formatCheck;
        }
        if (null !== $this->hit) {
            $res['Hit'] = $this->hit;
        }
        if (null !== $this->paraCode) {
            $res['ParaCode'] = $this->paraCode;
        }
        if (null !== $this->paraLevel) {
            $res['ParaLevel'] = $this->paraLevel;
        }
        if (null !== $this->paraName) {
            $res['ParaName'] = $this->paraName;
        }
        if (null !== $this->paraType) {
            $res['ParaType'] = $this->paraType;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = [];
            if (null !== $this->paramValue && \is_array($this->paramValue)) {
                $n = 0;
                foreach ($this->paramValue as $item) {
                    $res['ParamValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CanEditted'])) {
            $model->canEditted = $map['CanEditted'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['FormatCheck'])) {
            $model->formatCheck = $map['FormatCheck'];
        }
        if (isset($map['Hit'])) {
            $model->hit = $map['Hit'];
        }
        if (isset($map['ParaCode'])) {
            $model->paraCode = $map['ParaCode'];
        }
        if (isset($map['ParaLevel'])) {
            $model->paraLevel = $map['ParaLevel'];
        }
        if (isset($map['ParaName'])) {
            $model->paraName = $map['ParaName'];
        }
        if (isset($map['ParaType'])) {
            $model->paraType = $map['ParaType'];
        }
        if (isset($map['ParamValue'])) {
            if (!empty($map['ParamValue'])) {
                $model->paramValue = [];
                $n                 = 0;
                foreach ($map['ParamValue'] as $item) {
                    $model->paramValue[$n++] = null !== $item ? paramValue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
