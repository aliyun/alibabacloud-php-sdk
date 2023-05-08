<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesResponseBody;

use AlibabaCloud\Tea\Model;

class quaraFiles extends Model
{
    /**
     * @description The unique ID of the event.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The MD5 hash value of the quarantined file.
     *
     * @example WebshellQuaraEventType
     *
     * @var string
     */
    public $eventType;

    /**
     * @description 172.16.XX.XX
     *
     * @example 26918
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the server on which the quarantined file is located.
     *
     * @example i-2ze9t1qp36n1436m****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the quarantined file.
     *
     * @example iZwz98dkiw3vbrtqrt5v****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance ID of the asset.
     *
     * @example 47.XX.XX.131
     *
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @description The UUID of the server.
     *
     * @example 47.XX.XX.131
     *
     * @var string
     */
    public $ip;

    /**
     * @description The public IP address of the server on which the quarantined file is located.
     *
     * @example https://xxx.xxx/xxx
     *
     * @var string
     */
    public $link;

    /**
     * @description The private IP address of the server on which the quarantined file is located.
     *
     * @example 5ddebe926acc7ed39a664409bfd0ec10
     *
     * @var string
     */
    public $md5;

    /**
     * @example 2020-06-11 20:37:08
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The time when the quarantined file was last modified.
     *
     * @example /var/www/html/webshell-sample-master/others/defc3e21bab59e2a2ab49f7eda99f65f83d4d349.jpg
     *
     * @var string
     */
    public $path;

    /**
     * @description The public IP address of the server on which the quarantined file is located.
     *
     * @example rollbackDone
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the event.
     *
     * @example 228f890e56eae9eec6a42c7ea801b538
     *
     * @var string
     */
    public $tag;

    /**
     * @description The path to the quarantined file on the server.
     *
     * @example 04a0e735-ad32-4835-b635-0458d77b****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'eventName'    => 'EventName',
        'eventType'    => 'EventType',
        'id'           => 'Id',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'ip'           => 'Ip',
        'link'         => 'Link',
        'md5'          => 'Md5',
        'modifyTime'   => 'ModifyTime',
        'path'         => 'Path',
        'status'       => 'Status',
        'tag'          => 'Tag',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quaraFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
