<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDatasetRequest\updateCommand\apiInfo;

use AlibabaCloud\Dara\Model;

class requestParamList extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $descr;

    /**
     * @var bool
     */
    public $isUrl;

    /**
     * @var bool
     */
    public $must;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $sample;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'descr' => 'Descr',
        'isUrl' => 'IsUrl',
        'must' => 'Must',
        'paramName' => 'ParamName',
        'paramType' => 'ParamType',
        'sample' => 'Sample',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->descr) {
            $res['Descr'] = $this->descr;
        }

        if (null !== $this->isUrl) {
            $res['IsUrl'] = $this->isUrl;
        }

        if (null !== $this->must) {
            $res['Must'] = $this->must;
        }

        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Descr'])) {
            $model->descr = $map['Descr'];
        }

        if (isset($map['IsUrl'])) {
            $model->isUrl = $map['IsUrl'];
        }

        if (isset($map['Must'])) {
            $model->must = $map['Must'];
        }

        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }

        return $model;
    }
}
