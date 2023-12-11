<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody\data\paramValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example wafApi
     *
     * @var int
     */
    public $canEditted;

    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example wafApi
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example wafApi
     *
     * @var bool
     */
    public $disabled;

    /**
     * @example email
     *
     * @var string
     */
    public $formatCheck;

    /**
     * @example obs docment
     *
     * @var string
     */
    public $hit;

    /**
     * @example region_code
     *
     * @var string
     */
    public $paraCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $paraLevel;

    /**
     * @example region local
     *
     * @var string
     */
    public $paraName;

    /**
     * @example string
     *
     * @var string
     */
    public $paraType;

    /**
     * @var paramValue[]
     */
    public $paramValue;

    /**
     * @example string
     *
     * @var int
     */
    public $required;

    /**
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
