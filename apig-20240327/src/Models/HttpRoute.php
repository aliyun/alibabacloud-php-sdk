<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\domainInfos;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo;

class HttpRoute extends Model
{
    /**
     * @var Backend
     */
    public $backend;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var domainInfos[]
     */
    public $domainInfos;

    /**
     * @var environmentInfo
     */
    public $environmentInfo;

    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $routeId;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'backend' => 'backend',
        'createTimestamp' => 'createTimestamp',
        'deployStatus' => 'deployStatus',
        'description' => 'description',
        'domainInfos' => 'domainInfos',
        'environmentInfo' => 'environmentInfo',
        'match' => 'match',
        'name' => 'name',
        'routeId' => 'routeId',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->backend) {
            $this->backend->validate();
        }
        if (\is_array($this->domainInfos)) {
            Model::validateArray($this->domainInfos);
        }
        if (null !== $this->environmentInfo) {
            $this->environmentInfo->validate();
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backend) {
            $res['backend'] = null !== $this->backend ? $this->backend->toArray($noStream) : $this->backend;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domainInfos) {
            if (\is_array($this->domainInfos)) {
                $res['domainInfos'] = [];
                $n1 = 0;
                foreach ($this->domainInfos as $item1) {
                    $res['domainInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toArray($noStream) : $this->environmentInfo;
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['backend'])) {
            $model->backend = Backend::fromMap($map['backend']);
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domainInfos'])) {
            if (!empty($map['domainInfos'])) {
                $model->domainInfos = [];
                $n1 = 0;
                foreach ($map['domainInfos'] as $item1) {
                    $model->domainInfos[$n1++] = domainInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = environmentInfo::fromMap($map['environmentInfo']);
        }

        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
