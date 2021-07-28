<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduleRequest extends Model
{
    /**
     * @description 数据源地址
     * OSS地址，必须以https开头，使用前需要授权，如 https://bucket.endpoint/path/to/file
     * @var string
     */
    public $dataAddress;

    /**
     * @description 数据源类型
     * 其他列可用于替换模板中的形如${variable}的变量，实现个性化发送
     * @var int
     */
    public $dataSource;

    /**
     * @description 钉钉机器人关键词
     *
     * @var string
     */
    public $dingBotKeyword;

    /**
     * @description 钉钉机器人token
     *
     * @var string
     */
    public $dingBotToken;

    /**
     * @description 发送计划名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 分区表达式
     *
     * @var string
     */
    public $partition;

    /**
     * @description 手机号列名
     *
     * @var string
     */
    public $phoneNumberColumn;

    /**
     * @description 发布时间 (UTC+8)，建议距现在10分钟后，不能距现在超过一年，否则会发生回绕，格式必须是2020-01-01 12:00:00
     *
     * @var string
     */
    public $sendTime;

    /**
     * @description 签名ID
     *
     * @var string
     */
    public $signatureID;

    /**
     * @description 模板号列名(可选)
     *
     * @var string
     */
    public $templateCodeColumn;

    /**
     * @description 模板ID
     *
     * @var string
     */
    public $templateID;
    protected $_name = [
        'dataAddress'        => 'DataAddress',
        'dataSource'         => 'DataSource',
        'dingBotKeyword'     => 'DingBotKeyword',
        'dingBotToken'       => 'DingBotToken',
        'name'               => 'Name',
        'partition'          => 'Partition',
        'phoneNumberColumn'  => 'PhoneNumberColumn',
        'sendTime'           => 'SendTime',
        'signatureID'        => 'SignatureID',
        'templateCodeColumn' => 'TemplateCodeColumn',
        'templateID'         => 'TemplateID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAddress) {
            $res['DataAddress'] = $this->dataAddress;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->dingBotKeyword) {
            $res['DingBotKeyword'] = $this->dingBotKeyword;
        }
        if (null !== $this->dingBotToken) {
            $res['DingBotToken'] = $this->dingBotToken;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->phoneNumberColumn) {
            $res['PhoneNumberColumn'] = $this->phoneNumberColumn;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->signatureID) {
            $res['SignatureID'] = $this->signatureID;
        }
        if (null !== $this->templateCodeColumn) {
            $res['TemplateCodeColumn'] = $this->templateCodeColumn;
        }
        if (null !== $this->templateID) {
            $res['TemplateID'] = $this->templateID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataAddress'])) {
            $model->dataAddress = $map['DataAddress'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['DingBotKeyword'])) {
            $model->dingBotKeyword = $map['DingBotKeyword'];
        }
        if (isset($map['DingBotToken'])) {
            $model->dingBotToken = $map['DingBotToken'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['PhoneNumberColumn'])) {
            $model->phoneNumberColumn = $map['PhoneNumberColumn'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['SignatureID'])) {
            $model->signatureID = $map['SignatureID'];
        }
        if (isset($map['TemplateCodeColumn'])) {
            $model->templateCodeColumn = $map['TemplateCodeColumn'];
        }
        if (isset($map['TemplateID'])) {
            $model->templateID = $map['TemplateID'];
        }

        return $model;
    }
}
