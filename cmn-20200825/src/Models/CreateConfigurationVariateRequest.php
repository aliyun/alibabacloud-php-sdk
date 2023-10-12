<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigurationVariateRequest extends Model
{
    /**
     * @example clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 项目变量
     *
     * @var string
     */
    public $comment;

    /**
     * @example def main():
     *
     * @var string
     */
    public $formatFunction;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example variateName
     *
     * @var string
     */
    public $variateName;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'comment'        => 'Comment',
        'formatFunction' => 'FormatFunction',
        'instanceId'     => 'InstanceId',
        'variateName'    => 'VariateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->formatFunction) {
            $res['FormatFunction'] = $this->formatFunction;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->variateName) {
            $res['VariateName'] = $this->variateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigurationVariateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FormatFunction'])) {
            $model->formatFunction = $map['FormatFunction'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VariateName'])) {
            $model->variateName = $map['VariateName'];
        }

        return $model;
    }
}
