<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\deliverySettings\accounts;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data\deliverySettings\types;

class deliverySettings extends Model
{
    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @var bool
     */
    public $canConfigure;

    /**
     * @var int
     */
    public $configurationVersion;

    /**
     * @var string
     */
    public $daAccountId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $initialized;

    /**
     * @var bool
     */
    public $prerequisiteEnabled;

    /**
     * @var string
     */
    public $targetProject;

    /**
     * @var string
     */
    public $targetRegion;

    /**
     * @var types[]
     */
    public $types;

    /**
     * @var string
     */
    public $unavailableReason;
    protected $_name = [
        'accounts' => 'Accounts',
        'canConfigure' => 'CanConfigure',
        'configurationVersion' => 'ConfigurationVersion',
        'daAccountId' => 'DaAccountId',
        'enabled' => 'Enabled',
        'initialized' => 'Initialized',
        'prerequisiteEnabled' => 'PrerequisiteEnabled',
        'targetProject' => 'TargetProject',
        'targetRegion' => 'TargetRegion',
        'types' => 'Types',
        'unavailableReason' => 'UnavailableReason',
    ];

    public function validate()
    {
        if (\is_array($this->accounts)) {
            Model::validateArray($this->accounts);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            if (\is_array($this->accounts)) {
                $res['Accounts'] = [];
                $n1 = 0;
                foreach ($this->accounts as $item1) {
                    $res['Accounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->canConfigure) {
            $res['CanConfigure'] = $this->canConfigure;
        }

        if (null !== $this->configurationVersion) {
            $res['ConfigurationVersion'] = $this->configurationVersion;
        }

        if (null !== $this->daAccountId) {
            $res['DaAccountId'] = $this->daAccountId;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->initialized) {
            $res['Initialized'] = $this->initialized;
        }

        if (null !== $this->prerequisiteEnabled) {
            $res['PrerequisiteEnabled'] = $this->prerequisiteEnabled;
        }

        if (null !== $this->targetProject) {
            $res['TargetProject'] = $this->targetProject;
        }

        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unavailableReason) {
            $res['UnavailableReason'] = $this->unavailableReason;
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
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n1 = 0;
                foreach ($map['Accounts'] as $item1) {
                    $model->accounts[$n1] = accounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CanConfigure'])) {
            $model->canConfigure = $map['CanConfigure'];
        }

        if (isset($map['ConfigurationVersion'])) {
            $model->configurationVersion = $map['ConfigurationVersion'];
        }

        if (isset($map['DaAccountId'])) {
            $model->daAccountId = $map['DaAccountId'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Initialized'])) {
            $model->initialized = $map['Initialized'];
        }

        if (isset($map['PrerequisiteEnabled'])) {
            $model->prerequisiteEnabled = $map['PrerequisiteEnabled'];
        }

        if (isset($map['TargetProject'])) {
            $model->targetProject = $map['TargetProject'];
        }

        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }

        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1] = types::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UnavailableReason'])) {
            $model->unavailableReason = $map['UnavailableReason'];
        }

        return $model;
    }
}
