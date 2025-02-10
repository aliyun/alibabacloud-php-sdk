<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressRequest\healthTasks;

class CreateCloudGtmAddressRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $address;
    /**
     * @var string
     */
    public $attributeInfo;
    /**
     * @var string
     */
    public $availableMode;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $enableStatus;
    /**
     * @var string
     */
    public $healthJudgement;
    /**
     * @var healthTasks[]
     */
    public $healthTasks;
    /**
     * @var string
     */
    public $manualAvailableStatus;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'        => 'AcceptLanguage',
        'address'               => 'Address',
        'attributeInfo'         => 'AttributeInfo',
        'availableMode'         => 'AvailableMode',
        'clientToken'           => 'ClientToken',
        'enableStatus'          => 'EnableStatus',
        'healthJudgement'       => 'HealthJudgement',
        'healthTasks'           => 'HealthTasks',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name'                  => 'Name',
        'remark'                => 'Remark',
        'type'                  => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->healthTasks)) {
            Model::validateArray($this->healthTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }

        if (null !== $this->availableMode) {
            $res['AvailableMode'] = $this->availableMode;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }

        if (null !== $this->healthTasks) {
            if (\is_array($this->healthTasks)) {
                $res['HealthTasks'] = [];
                $n1                 = 0;
                foreach ($this->healthTasks as $item1) {
                    $res['HealthTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->manualAvailableStatus) {
            $res['ManualAvailableStatus'] = $this->manualAvailableStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }

        if (isset($map['AvailableMode'])) {
            $model->availableMode = $map['AvailableMode'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }

        if (isset($map['HealthTasks'])) {
            if (!empty($map['HealthTasks'])) {
                $model->healthTasks = [];
                $n1                 = 0;
                foreach ($map['HealthTasks'] as $item1) {
                    $model->healthTasks[$n1++] = healthTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['ManualAvailableStatus'])) {
            $model->manualAvailableStatus = $map['ManualAvailableStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
