<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\entryRules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var entryRules[]
     */
    public $entryRules;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example Client
     *
     * @var string
     */
    public $messageQueueFilterSide;

    /**
     * @var bool
     */
    public $messageQueueGrayEnable;

    /**
     * @example swimmingGroup
     *
     * @var string
     */
    public $name;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $recordCanaryDetail;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @example 12345
     *
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
        'entryRules'             => 'EntryRules',
        'groupId'                => 'GroupId',
        'id'                     => 'Id',
        'messageQueueFilterSide' => 'MessageQueueFilterSide',
        'messageQueueGrayEnable' => 'MessageQueueGrayEnable',
        'name'                   => 'Name',
        'namespace'              => 'Namespace',
        'recordCanaryDetail'     => 'RecordCanaryDetail',
        'regionId'               => 'RegionId',
        'tag'                    => 'Tag',
        'userId'                 => 'UserId',
        'enableRules'            => 'enableRules',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryRules) {
            $res['EntryRules'] = [];
            if (null !== $this->entryRules && \is_array($this->entryRules)) {
                $n = 0;
                foreach ($this->entryRules as $item) {
                    $res['EntryRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntryRules'])) {
            if (!empty($map['EntryRules'])) {
                $model->entryRules = [];
                $n                 = 0;
                foreach ($map['EntryRules'] as $item) {
                    $model->entryRules[$n++] = null !== $item ? entryRules::fromMap($item) : $item;
                }
            }
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
