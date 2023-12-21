<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListParamsResponseBody;

use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @example Daily
     *
     * @var string
     */
    public $environment;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example home
     *
     * @var string
     */
    public $name;

    /**
     * @example 4
     *
     * @var string
     */
    public $paramId;

    /**
     * @example house
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'environment'     => 'Environment',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name'            => 'Name',
        'paramId'         => 'ParamId',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramId) {
            $res['ParamId'] = $this->paramId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return params
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamId'])) {
            $model->paramId = $map['ParamId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
