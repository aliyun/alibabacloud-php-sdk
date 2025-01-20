<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\entryRules;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\gatewaySwimmingLaneRoute;

class data extends Model
{
    /**
     * @var string
     */
    public $enable;
    /**
     * @var entryRules[]
     */
    public $entryRules;
    /**
     * @var gatewaySwimmingLaneRoute
     */
    public $gatewaySwimmingLaneRoute;
    /**
     * @var string
     */
    public $gatewaySwimmingLaneRouteJson;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $messageQueueFilterSide;
    /**
     * @var bool
     */
    public $messageQueueGrayEnable;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var bool
     */
    public $pathIndependentPercentageEnable;
    /**
     * @var bool
     */
    public $recordCanaryDetail;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var bool
     */
    public $enableRules;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'enable'                          => 'Enable',
        'entryRules'                      => 'EntryRules',
        'gatewaySwimmingLaneRoute'        => 'GatewaySwimmingLaneRoute',
        'gatewaySwimmingLaneRouteJson'    => 'GatewaySwimmingLaneRouteJson',
        'groupId'                         => 'GroupId',
        'id'                              => 'Id',
        'messageQueueFilterSide'          => 'MessageQueueFilterSide',
        'messageQueueGrayEnable'          => 'MessageQueueGrayEnable',
        'name'                            => 'Name',
        'namespace'                       => 'Namespace',
        'pathIndependentPercentageEnable' => 'PathIndependentPercentageEnable',
        'recordCanaryDetail'              => 'RecordCanaryDetail',
        'regionId'                        => 'RegionId',
        'tag'                             => 'Tag',
        'userId'                          => 'UserId',
        'enableRules'                     => 'enableRules',
        'gmtCreate'                       => 'gmtCreate',
        'gmtModified'                     => 'gmtModified',
    ];

    public function validate()
    {
        if (\is_array($this->entryRules)) {
            Model::validateArray($this->entryRules);
        }
        if (null !== $this->gatewaySwimmingLaneRoute) {
            $this->gatewaySwimmingLaneRoute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->entryRules) {
            if (\is_array($this->entryRules)) {
                $res['EntryRules'] = [];
                $n1                = 0;
                foreach ($this->entryRules as $item1) {
                    $res['EntryRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gatewaySwimmingLaneRoute) {
            $res['GatewaySwimmingLaneRoute'] = null !== $this->gatewaySwimmingLaneRoute ? $this->gatewaySwimmingLaneRoute->toArray($noStream) : $this->gatewaySwimmingLaneRoute;
        }

        if (null !== $this->gatewaySwimmingLaneRouteJson) {
            $res['GatewaySwimmingLaneRouteJson'] = $this->gatewaySwimmingLaneRouteJson;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->messageQueueFilterSide) {
            $res['MessageQueueFilterSide'] = $this->messageQueueFilterSide;
        }

        if (null !== $this->messageQueueGrayEnable) {
            $res['MessageQueueGrayEnable'] = $this->messageQueueGrayEnable;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->pathIndependentPercentageEnable) {
            $res['PathIndependentPercentageEnable'] = $this->pathIndependentPercentageEnable;
        }

        if (null !== $this->recordCanaryDetail) {
            $res['RecordCanaryDetail'] = $this->recordCanaryDetail;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->enableRules) {
            $res['enableRules'] = $this->enableRules;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EntryRules'])) {
            if (!empty($map['EntryRules'])) {
                $model->entryRules = [];
                $n1                = 0;
                foreach ($map['EntryRules'] as $item1) {
                    $model->entryRules[$n1++] = entryRules::fromMap($item1);
                }
            }
        }

        if (isset($map['GatewaySwimmingLaneRoute'])) {
            $model->gatewaySwimmingLaneRoute = gatewaySwimmingLaneRoute::fromMap($map['GatewaySwimmingLaneRoute']);
        }

        if (isset($map['GatewaySwimmingLaneRouteJson'])) {
            $model->gatewaySwimmingLaneRouteJson = $map['GatewaySwimmingLaneRouteJson'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MessageQueueFilterSide'])) {
            $model->messageQueueFilterSide = $map['MessageQueueFilterSide'];
        }

        if (isset($map['MessageQueueGrayEnable'])) {
            $model->messageQueueGrayEnable = $map['MessageQueueGrayEnable'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PathIndependentPercentageEnable'])) {
            $model->pathIndependentPercentageEnable = $map['PathIndependentPercentageEnable'];
        }

        if (isset($map['RecordCanaryDetail'])) {
            $model->recordCanaryDetail = $map['RecordCanaryDetail'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['enableRules'])) {
            $model->enableRules = $map['enableRules'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        return $model;
    }
}
