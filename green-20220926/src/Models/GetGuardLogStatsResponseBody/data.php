<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetGuardLogStatsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deliveryRegion;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var mixed[]
     */
    public $logAnalysisConfig;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $pendingStorage;

    /**
     * @var int
     */
    public $preserveStorage;

    /**
     * @var string
     */
    public $project;

    /**
     * @var int
     */
    public $totalStorage;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $usedStorage;
    protected $_name = [
        'deliveryRegion' => 'DeliveryRegion',
        'enable' => 'Enable',
        'logAnalysisConfig' => 'LogAnalysisConfig',
        'logStoreName' => 'LogStoreName',
        'pendingStorage' => 'PendingStorage',
        'preserveStorage' => 'PreserveStorage',
        'project' => 'Project',
        'totalStorage' => 'TotalStorage',
        'ttl' => 'Ttl',
        'type' => 'Type',
        'uid' => 'Uid',
        'usedStorage' => 'UsedStorage',
    ];

    public function validate()
    {
        if (\is_array($this->logAnalysisConfig)) {
            Model::validateArray($this->logAnalysisConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryRegion) {
            $res['DeliveryRegion'] = $this->deliveryRegion;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->logAnalysisConfig) {
            if (\is_array($this->logAnalysisConfig)) {
                $res['LogAnalysisConfig'] = [];
                foreach ($this->logAnalysisConfig as $key1 => $value1) {
                    $res['LogAnalysisConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->pendingStorage) {
            $res['PendingStorage'] = $this->pendingStorage;
        }

        if (null !== $this->preserveStorage) {
            $res['PreserveStorage'] = $this->preserveStorage;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->totalStorage) {
            $res['TotalStorage'] = $this->totalStorage;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->usedStorage) {
            $res['UsedStorage'] = $this->usedStorage;
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
        if (isset($map['DeliveryRegion'])) {
            $model->deliveryRegion = $map['DeliveryRegion'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['LogAnalysisConfig'])) {
            if (!empty($map['LogAnalysisConfig'])) {
                $model->logAnalysisConfig = [];
                foreach ($map['LogAnalysisConfig'] as $key1 => $value1) {
                    $model->logAnalysisConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['PendingStorage'])) {
            $model->pendingStorage = $map['PendingStorage'];
        }

        if (isset($map['PreserveStorage'])) {
            $model->preserveStorage = $map['PreserveStorage'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['TotalStorage'])) {
            $model->totalStorage = $map['TotalStorage'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UsedStorage'])) {
            $model->usedStorage = $map['UsedStorage'];
        }

        return $model;
    }
}
