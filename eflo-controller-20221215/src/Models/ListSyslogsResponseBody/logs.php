<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListSyslogsResponseBody;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $facility;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $syslogtag;

    /**
     * @var string
     */
    public $tagHostname;

    /**
     * @var string
     */
    public $tagPackId;

    /**
     * @var string
     */
    public $tagPath;

    /**
     * @var string
     */
    public $tagReceiveTime;

    /**
     * @var string
     */
    public $tagUserDefinedId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'domain' => 'Domain',
        'facility' => 'Facility',
        'hostname' => 'Hostname',
        'ip' => 'Ip',
        'msg' => 'Msg',
        'nodeId' => 'NodeId',
        'severity' => 'Severity',
        'sn' => 'Sn',
        'source' => 'Source',
        'syslogtag' => 'Syslogtag',
        'tagHostname' => 'TagHostname',
        'tagPackId' => 'TagPackId',
        'tagPath' => 'TagPath',
        'tagReceiveTime' => 'TagReceiveTime',
        'tagUserDefinedId' => 'TagUserDefinedId',
        'time' => 'Time',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->facility) {
            $res['Facility'] = $this->facility;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->syslogtag) {
            $res['Syslogtag'] = $this->syslogtag;
        }

        if (null !== $this->tagHostname) {
            $res['TagHostname'] = $this->tagHostname;
        }

        if (null !== $this->tagPackId) {
            $res['TagPackId'] = $this->tagPackId;
        }

        if (null !== $this->tagPath) {
            $res['TagPath'] = $this->tagPath;
        }

        if (null !== $this->tagReceiveTime) {
            $res['TagReceiveTime'] = $this->tagReceiveTime;
        }

        if (null !== $this->tagUserDefinedId) {
            $res['TagUserDefinedId'] = $this->tagUserDefinedId;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Facility'])) {
            $model->facility = $map['Facility'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Syslogtag'])) {
            $model->syslogtag = $map['Syslogtag'];
        }

        if (isset($map['TagHostname'])) {
            $model->tagHostname = $map['TagHostname'];
        }

        if (isset($map['TagPackId'])) {
            $model->tagPackId = $map['TagPackId'];
        }

        if (isset($map['TagPath'])) {
            $model->tagPath = $map['TagPath'];
        }

        if (isset($map['TagReceiveTime'])) {
            $model->tagReceiveTime = $map['TagReceiveTime'];
        }

        if (isset($map['TagUserDefinedId'])) {
            $model->tagUserDefinedId = $map['TagUserDefinedId'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
