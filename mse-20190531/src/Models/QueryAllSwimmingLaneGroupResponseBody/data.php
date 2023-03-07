<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appIds;

    /**
     * @var string
     */
    public $dbGrayEnable;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $entryApp;

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
    public $recordCanaryDetail;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appIds'                 => 'AppIds',
        'dbGrayEnable'           => 'DbGrayEnable',
        'enable'                 => 'Enable',
        'entryApp'               => 'EntryApp',
        'id'                     => 'Id',
        'messageQueueFilterSide' => 'MessageQueueFilterSide',
        'messageQueueGrayEnable' => 'MessageQueueGrayEnable',
        'name'                   => 'Name',
        'namespace'              => 'Namespace',
        'recordCanaryDetail'     => 'RecordCanaryDetail',
        'region'                 => 'Region',
        'source'                 => 'Source',
        'status'                 => 'Status',
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
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
