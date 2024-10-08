<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetWafRuleResponseBody extends Model
{
    /**
     * @var WafRuleConfig
     */
    public $config;

    /**
     * @description 自定义响应页面ID
     *
     * @example 2000001
     *
     * @var int
     */
    public $id;

    /**
     * @description 自定义响应页面名称
     *
     * This parameter is required.
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description 自定义响应页面内容类型
     *
     * This parameter is required.
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @description Id of the request
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'config'     => 'Config',
        'id'         => 'Id',
        'name'       => 'Name',
        'phase'      => 'Phase',
        'position'   => 'Position',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWafRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = WafRuleConfig::fromMap($map['Config']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
