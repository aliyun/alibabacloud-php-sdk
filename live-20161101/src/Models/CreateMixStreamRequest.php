<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateMixStreamRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $inputStreamList;

    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $callbackConfig;
    protected $_name = [
        'domainName'      => 'DomainName',
        'layoutId'        => 'LayoutId',
        'inputStreamList' => 'InputStreamList',
        'outputConfig'    => 'OutputConfig',
        'callbackConfig'  => 'CallbackConfig',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('layoutId', $this->layoutId, true);
        Model::validateRequired('inputStreamList', $this->inputStreamList, true);
        Model::validateRequired('outputConfig', $this->outputConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->inputStreamList) {
            $res['InputStreamList'] = $this->inputStreamList;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->callbackConfig) {
            $res['CallbackConfig'] = $this->callbackConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMixStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['InputStreamList'])) {
            $model->inputStreamList = $map['InputStreamList'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['CallbackConfig'])) {
            $model->callbackConfig = $map['CallbackConfig'];
        }

        return $model;
    }
}
