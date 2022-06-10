<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerResponseBody extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @description 域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如{domainName}.cn-shanghai.fc.aliyuncs.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description 调用函数使用的RAM角色的ARN
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @description 上次修改时间
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description service版本
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description event source的Aliyun Resource Name（ARN
     *
     * @var string
     */
    public $sourceArn;

    /**
     * @description trigger配置对象
     *
     * @var string
     */
    public $triggerConfig;

    /**
     * @var string
     */
    public $triggerId;

    /**
     * @description trigger名称
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description 公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。
     *
     * @var string
     */
    public $urlInternet;

    /**
     * @description 私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。
     *
     * @var string
     */
    public $urlIntranet;
    protected $_name = [
        'createdTime'      => 'createdTime',
        'description'      => 'description',
        'domainName'       => 'domainName',
        'invocationRole'   => 'invocationRole',
        'lastModifiedTime' => 'lastModifiedTime',
        'qualifier'        => 'qualifier',
        'sourceArn'        => 'sourceArn',
        'triggerConfig'    => 'triggerConfig',
        'triggerId'        => 'triggerId',
        'triggerName'      => 'triggerName',
        'triggerType'      => 'triggerType',
        'urlInternet'      => 'urlInternet',
        'urlIntranet'      => 'urlIntranet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->invocationRole) {
            $res['invocationRole'] = $this->invocationRole;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->sourceArn) {
            $res['sourceArn'] = $this->sourceArn;
        }
        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = $this->triggerConfig;
        }
        if (null !== $this->triggerId) {
            $res['triggerId'] = $this->triggerId;
        }
        if (null !== $this->triggerName) {
            $res['triggerName'] = $this->triggerName;
        }
        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }
        if (null !== $this->urlInternet) {
            $res['urlInternet'] = $this->urlInternet;
        }
        if (null !== $this->urlIntranet) {
            $res['urlIntranet'] = $this->urlIntranet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['invocationRole'])) {
            $model->invocationRole = $map['invocationRole'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['sourceArn'])) {
            $model->sourceArn = $map['sourceArn'];
        }
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = $map['triggerConfig'];
        }
        if (isset($map['triggerId'])) {
            $model->triggerId = $map['triggerId'];
        }
        if (isset($map['triggerName'])) {
            $model->triggerName = $map['triggerName'];
        }
        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }
        if (isset($map['urlInternet'])) {
            $model->urlInternet = $map['urlInternet'];
        }
        if (isset($map['urlIntranet'])) {
            $model->urlIntranet = $map['urlIntranet'];
        }

        return $model;
    }
}
