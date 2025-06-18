<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponseBody\data\paramValue;

class data extends Model
{
    /**
     * @var int
     */
    public $canEditted;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $formatCheck;

    /**
     * @var string
     */
    public $hit;

    /**
     * @var string
     */
    public $paraCode;

    /**
     * @var int
     */
    public $paraLevel;

    /**
     * @var string
     */
    public $paraName;

    /**
     * @var string
     */
    public $paraType;

    /**
     * @var paramValue[]
     */
    public $paramValue;

    /**
     * @var int
     */
    public $required;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'canEditted' => 'CanEditted',
        'cloudCode' => 'CloudCode',
        'dataSourceType' => 'DataSourceType',
        'defaultValue' => 'DefaultValue',
        'disabled' => 'Disabled',
        'formatCheck' => 'FormatCheck',
        'hit' => 'Hit',
        'paraCode' => 'ParaCode',
        'paraLevel' => 'ParaLevel',
        'paraName' => 'ParaName',
        'paraType' => 'ParaType',
        'paramValue' => 'ParamValue',
        'required' => 'Required',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->paramValue)) {
            Model::validateArray($this->paramValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->paramValue)) {
                $res['ParamValue'] = [];
                $n1 = 0;
                foreach ($this->paramValue as $item1) {
                    $res['ParamValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ParamValue'] as $item1) {
                    $model->paramValue[$n1] = paramValue::fromMap($item1);
                    ++$n1;
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
