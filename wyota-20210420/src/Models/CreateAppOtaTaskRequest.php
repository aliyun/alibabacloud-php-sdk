<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class CreateAppOtaTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appVersionUid;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string[]
     */
    public $clientIdList;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $forceUpgrade;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string[]
     */
    public $regions;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $tenantIdList;
    protected $_name = [
        'appVersionUid' => 'AppVersionUid',
        'channel' => 'Channel',
        'clientIdList' => 'ClientIdList',
        'clientType' => 'ClientType',
        'creator' => 'Creator',
        'description' => 'Description',
        'forceUpgrade' => 'ForceUpgrade',
        'label' => 'Label',
        'name' => 'Name',
        'project' => 'Project',
        'regions' => 'Regions',
        'status' => 'Status',
        'taskType' => 'TaskType',
        'tenantId' => 'TenantId',
        'tenantIdList' => 'TenantIdList',
    ];

    public function validate()
    {
        if (\is_array($this->clientIdList)) {
            Model::validateArray($this->clientIdList);
        }
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        if (\is_array($this->tenantIdList)) {
            Model::validateArray($this->tenantIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersionUid) {
            $res['AppVersionUid'] = $this->appVersionUid;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->clientIdList) {
            if (\is_array($this->clientIdList)) {
                $res['ClientIdList'] = [];
                $n1 = 0;
                foreach ($this->clientIdList as $item1) {
                    $res['ClientIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->forceUpgrade) {
            $res['ForceUpgrade'] = $this->forceUpgrade;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantIdList) {
            if (\is_array($this->tenantIdList)) {
                $res['TenantIdList'] = [];
                $n1 = 0;
                foreach ($this->tenantIdList as $item1) {
                    $res['TenantIdList'][$n1] = $item1;
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
        if (isset($map['AppVersionUid'])) {
            $model->appVersionUid = $map['AppVersionUid'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ClientIdList'])) {
            if (!empty($map['ClientIdList'])) {
                $model->clientIdList = [];
                $n1 = 0;
                foreach ($map['ClientIdList'] as $item1) {
                    $model->clientIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ForceUpgrade'])) {
            $model->forceUpgrade = $map['ForceUpgrade'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantIdList'])) {
            if (!empty($map['TenantIdList'])) {
                $model->tenantIdList = [];
                $n1 = 0;
                foreach ($map['TenantIdList'] as $item1) {
                    $model->tenantIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
