<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class SendCustomEventRequest extends Model
{
    /**
     * @description User ID.
     *
     * This parameter is required.
     * @example 1214484929940219
     *
     * @var string
     */
    public $customerId;

    /**
     * @description Data source.
     *
     * @example aegis_suspicious_event
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description Event details.
     *
     * @example 疑似病毒木马启动运行。
     *
     * @var string
     */
    public $eventDescription;

    /**
     * @description Alert event details.
     *
     * @example [{"name":"提示","type":"text","value":"在您的系统上发现可疑进程启动行为，通常与病毒木马或入侵事件相关"},{"name":"ATT&CK攻击阶段","type":"text","value":"代码执行"},{"name":"恶意行为","type":"text","value":"可疑的漏洞利用代码执行"},{"name":"规则类型","type":"text","value":"进程启动"},{"name":"规则引擎","type":"text","value":"精准攻击识别引擎"},{"name":"处置动作","type":"text","value":"阻断行为"},{"name":"进程路径","type":"text","value":"/usr/bin/python3.9"},{"name":"命令行","type":"text","value":"python3 /root/poc/python/cve-2018-15473.py --username root --port 22"},{"name":"父进程路径","type":"text","value":"/bin/gunkit"},{"name":"父进程命令行","type":"text","value":"gunkit serve-grpc --addr unix:///data/gunkit-grpc.sock"},{"name":"进程ID","type":"text","value":"22714"},{"name":"父进程ID","type":"text","value":"2986"},{"name":"描述","type":"text","value":"主动防御检测到可疑进程启动行为，这类可疑进程通常存在于特殊的系统目录，或通过后缀伪装成文档/音频/图片等文件诱导用户运行，该异常行为已被成功拦截"},{"name":"处置建议","type":"text","value":"请您及时排查是否是正常的业务操作，如果您觉得此次拦截是非预期的，那您可以在主动防御 - 恶意行为防御页面中，关闭“可疑进程启动“规则集或者将受影响机器从管理主机中移除"},{"name":"父进程关系","type":"processChain","value":"1:::/usr/lib/systemd/systemd --switched-root --system --deserialize 22 &&& 2939:::/usr/local/bin/containerd-shim-runc-v2 -namespace moby -id 270f164903b47d4e219b410b8d11d9079a7ad1bac8133aea604598300d3b03d5 -address /run/containerd/containerd.sock &&& 2962:::/usr/bin/python3 /usr/bin/supervisord -n &&& 2986:::gunkit serve-grpc --addr unix:///data/gunkit-grpc.sock"}]
     *
     * @var string
     */
    public $eventDetails;

    /**
     * @description Event name.
     *
     * This parameter is required.
     * @example 客户端离线
     *
     * @var string
     */
    public $eventName;

    /**
     * @description Event type.
     *
     * This parameter is required.
     * @example SUSP_CUSTOM_CFW
     *
     * @var string
     */
    public $eventType;

    /**
     * @description Alert discovery time.
     *
     * This parameter is required.
     * @example 2023-04-23 14:47:34
     *
     * @var int
     */
    public $findTime;

    /**
     * @description Instance ID.
     *
     * @example i-uf60h3ns25bzq9eyf8ps
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance name.
     *
     * @example 猫吉-售卖-MDR扫描器集群1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Whether to send.
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $isSend;

    /**
     * @description Event level.
     *
     * This parameter is required.
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @description The first occurrence time of the alert event.
     *
     * @example 1724956996000
     *
     * @var int
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description Product name.
     *
     * @example CloudSecCenter
     *
     * @var string
     */
    public $product;

    /**
     * @description Unique ID.
     *
     * This parameter is required.
     * @example 68888f02-98f2-492b-a2b2-5b13295755b7
     *
     * @var string
     */
    public $uniqueId;

    /**
     * @description UUID.
     *
     * @example 93B6CDAB-7D2E-33D2-9EBA-25D561A2E95F
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'customerId'       => 'CustomerId',
        'dataSource'       => 'DataSource',
        'eventDescription' => 'EventDescription',
        'eventDetails'     => 'EventDetails',
        'eventName'        => 'EventName',
        'eventType'        => 'EventType',
        'findTime'         => 'FindTime',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'isSend'           => 'IsSend',
        'level'            => 'Level',
        'occurrenceTime'   => 'OccurrenceTime',
        'ownerId'          => 'OwnerId',
        'product'          => 'Product',
        'uniqueId'         => 'UniqueId',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->eventDescription) {
            $res['EventDescription'] = $this->eventDescription;
        }
        if (null !== $this->eventDetails) {
            $res['EventDetails'] = $this->eventDetails;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->findTime) {
            $res['FindTime'] = $this->findTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isSend) {
            $res['IsSend'] = $this->isSend;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCustomEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['EventDescription'])) {
            $model->eventDescription = $map['EventDescription'];
        }
        if (isset($map['EventDetails'])) {
            $model->eventDetails = $map['EventDetails'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['FindTime'])) {
            $model->findTime = $map['FindTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsSend'])) {
            $model->isSend = $map['IsSend'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
