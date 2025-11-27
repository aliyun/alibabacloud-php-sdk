<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponseBody\collectors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponseBody\collectors\workloads\managedInfo;

class workloads extends Model
{
    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var bool
     */
    public $managed;

    /**
     * @var managedInfo
     */
    public $managedInfo;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $ownerReferenceKind;

    /**
     * @var string
     */
    public $ownerReferenceName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'hostIp' => 'hostIp',
        'ip' => 'ip',
        'managed' => 'managed',
        'managedInfo' => 'managedInfo',
        'message' => 'message',
        'name' => 'name',
        'namespace' => 'namespace',
        'ownerReferenceKind' => 'ownerReferenceKind',
        'ownerReferenceName' => 'ownerReferenceName',
        'startTime' => 'startTime',
        'status' => 'status',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->managedInfo) {
            $this->managedInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostIp) {
            $res['hostIp'] = $this->hostIp;
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->managed) {
            $res['managed'] = $this->managed;
        }

        if (null !== $this->managedInfo) {
            $res['managedInfo'] = null !== $this->managedInfo ? $this->managedInfo->toArray($noStream) : $this->managedInfo;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->ownerReferenceKind) {
            $res['ownerReferenceKind'] = $this->ownerReferenceKind;
        }

        if (null !== $this->ownerReferenceName) {
            $res['ownerReferenceName'] = $this->ownerReferenceName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['hostIp'])) {
            $model->hostIp = $map['hostIp'];
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['managed'])) {
            $model->managed = $map['managed'];
        }

        if (isset($map['managedInfo'])) {
            $model->managedInfo = managedInfo::fromMap($map['managedInfo']);
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['ownerReferenceKind'])) {
            $model->ownerReferenceKind = $map['ownerReferenceKind'];
        }

        if (isset($map['ownerReferenceName'])) {
            $model->ownerReferenceName = $map['ownerReferenceName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
