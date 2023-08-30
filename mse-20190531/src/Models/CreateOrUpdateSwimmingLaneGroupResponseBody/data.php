<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example abcd1@abcde123,abcd1@abcde124
     *
     * @var string
     */
    public $appIds;

    /**
     * @example true
     *
     * @var string
     */
    public $dbGrayEnable;

    /**
     * @example mse:abcd1@a2345
     *
     * @var string
     */
    public $entryApp;

    /**
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
     * @example example-app
     *
     * @var string
     */
    public $name;

    /**
     * @example prod
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
    public $region;

    /**
     * @example 12345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appIds'                 => 'AppIds',
        'dbGrayEnable'           => 'DbGrayEnable',
        'entryApp'               => 'EntryApp',
        'id'                     => 'Id',
        'messageQueueFilterSide' => 'MessageQueueFilterSide',
        'messageQueueGrayEnable' => 'MessageQueueGrayEnable',
        'name'                   => 'Name',
        'namespace'              => 'Namespace',
        'recordCanaryDetail'     => 'RecordCanaryDetail',
        'region'                 => 'Region',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->dbGrayEnable) {
            $res['DbGrayEnable'] = $this->dbGrayEnable;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['DbGrayEnable'])) {
            $model->dbGrayEnable = $map['DbGrayEnable'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
