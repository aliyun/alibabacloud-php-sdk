<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayClusterResponseBody\rayClusters\headSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayClusterResponseBody\rayClusters\workerSpec;

class rayClusters extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $dashboardUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var string
     */
    public $grpcEndpoint;

    /**
     * @var headSpec
     */
    public $headSpec;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $modified;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkServiceName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var workerSpec[]
     */
    public $workerSpec;
    protected $_name = [
        'clusterId' => 'clusterId',
        'createTime' => 'createTime',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'dashboardUrl' => 'dashboardUrl',
        'description' => 'description',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'grpcEndpoint' => 'grpcEndpoint',
        'headSpec' => 'headSpec',
        'instanceId' => 'instanceId',
        'message' => 'message',
        'modified' => 'modified',
        'modifiedTime' => 'modifiedTime',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'name' => 'name',
        'networkServiceName' => 'networkServiceName',
        'startTime' => 'startTime',
        'state' => 'state',
        'userId' => 'userId',
        'workerSpec' => 'workerSpec',
    ];

    public function validate()
    {
        if (null !== $this->headSpec) {
            $this->headSpec->validate();
        }
        if (\is_array($this->workerSpec)) {
            Model::validateArray($this->workerSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->dashboardUrl) {
            $res['dashboardUrl'] = $this->dashboardUrl;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->grpcEndpoint) {
            $res['grpcEndpoint'] = $this->grpcEndpoint;
        }

        if (null !== $this->headSpec) {
            $res['headSpec'] = null !== $this->headSpec ? $this->headSpec->toArray($noStream) : $this->headSpec;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->modified) {
            $res['modified'] = $this->modified;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkServiceName) {
            $res['networkServiceName'] = $this->networkServiceName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workerSpec) {
            if (\is_array($this->workerSpec)) {
                $res['workerSpec'] = [];
                $n1 = 0;
                foreach ($this->workerSpec as $item1) {
                    $res['workerSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['dashboardUrl'])) {
            $model->dashboardUrl = $map['dashboardUrl'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['grpcEndpoint'])) {
            $model->grpcEndpoint = $map['grpcEndpoint'];
        }

        if (isset($map['headSpec'])) {
            $model->headSpec = headSpec::fromMap($map['headSpec']);
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['modified'])) {
            $model->modified = $map['modified'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkServiceName'])) {
            $model->networkServiceName = $map['networkServiceName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workerSpec'])) {
            if (!empty($map['workerSpec'])) {
                $model->workerSpec = [];
                $n1 = 0;
                foreach ($map['workerSpec'] as $item1) {
                    $model->workerSpec[$n1] = workerSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
