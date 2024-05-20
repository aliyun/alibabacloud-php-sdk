<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateGreyTagRouteRequest extends Model
{
    /**
     * @example [{"condition":"AND","items":[{"cond":"==","name":"grey","operator":"rawvalue","type":"sourceIp","value":"127.0.0.1"},{"cond":"==","name":"grey","operator":"rawvalue","type":"cookie","value":"true"},{"cond":"==","name":"grey","operator":"rawvalue","type":"header","value":"true"}],"path":"/post-echo/hi"}]
     *
     * @var string
     */
    public $albRules;

    /**
     * @description dubbo-echo
     *
     * This parameter is required.
     * @example 7802c49a-67bc-4167-8369-9a9c003c****
     *
     * @var string
     */
    public $appId;

    /**
     * @description [{"condition":"OR","items":[{"cond":"==","name":"grey","operator":"rawvalue","type":"param","value":"true"},{"cond":"==","name":"grey","operator":"rawvalue","type":"cookie","value":"true"},{"cond":"==","name":"grey","operator":"rawvalue","type":"header","value":"true"}],"path":"/post-echo/hi"}]
     *
     * @example 灰度发布-地域灰度
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example [{"condition":"OR","group":"DUBBO","items":[{"cond":"==","expr":".key1","index":0,"operator":"rawvalue","value":"value1"},{"cond":"==","expr":".key2","index":0,"operator":"rawvalue","value":"value2"}],"methodName":"echo","serviceName":"com.alibaba.edas.boot.EchoService","version":"1.0.0"}]
     *
     * @var string
     */
    public $dubboRules;

    /**
     * @description Canary Release - Regions
     *
     * This parameter is required.
     * @example dubbo-echo
     *
     * @var string
     */
    public $name;

    /**
     * @description [{"condition":"OR","group":"DUBBO","items":[{"cond":"==","expr":".key1","index":0,"operator":"rawvalue","value":"value1"},{"cond":"==","expr":".key2","index":0,"operator":"rawvalue","value":"value2"}],"methodName":"echo","serviceName":"com.alibaba.edas.boot.EchoService","version":"1.0.0"}]
     *
     * @example [{"condition":"OR","items":[{"cond":"==","name":"grey","operator":"rawvalue","type":"param","value":"true"},{"cond":"==","name":"grey","operator":"rawvalue","type":"cookie","value":"true"},{"cond":"==","name":"grey","operator":"rawvalue","type":"header","value":"true"}],"path":"/post-echo/hi"}]
     *
     * @var string
     */
    public $scRules;
    protected $_name = [
        'albRules'    => 'AlbRules',
        'appId'       => 'AppId',
        'description' => 'Description',
        'dubboRules'  => 'DubboRules',
        'name'        => 'Name',
        'scRules'     => 'ScRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albRules) {
            $res['AlbRules'] = $this->albRules;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dubboRules) {
            $res['DubboRules'] = $this->dubboRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scRules) {
            $res['ScRules'] = $this->scRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGreyTagRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbRules'])) {
            $model->albRules = $map['AlbRules'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DubboRules'])) {
            $model->dubboRules = $map['DubboRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScRules'])) {
            $model->scRules = $map['ScRules'];
        }

        return $model;
    }
}
