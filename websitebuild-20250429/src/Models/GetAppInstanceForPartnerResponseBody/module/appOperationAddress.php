<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module\appOperationAddress\actions;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module\appOperationAddress\dashboardActions;

class appOperationAddress extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var string
     */
    public $aiCustomerConfigUrl;

    /**
     * @var string
     */
    public $aiDesignUrl;

    /**
     * @var string
     */
    public $appPublishUrl;

    /**
     * @var dashboardActions[]
     */
    public $dashboardActions;

    /**
     * @var string
     */
    public $designUrl;

    /**
     * @var string
     */
    public $instanceLoginUrl;

    /**
     * @var string
     */
    public $renewBuyUrl;

    /**
     * @var string
     */
    public $serverDeliveryUrl;

    /**
     * @var string
     */
    public $upgradeBuyUrl;
    protected $_name = [
        'actions' => 'Actions',
        'aiCustomerConfigUrl' => 'AiCustomerConfigUrl',
        'aiDesignUrl' => 'AiDesignUrl',
        'appPublishUrl' => 'AppPublishUrl',
        'dashboardActions' => 'DashboardActions',
        'designUrl' => 'DesignUrl',
        'instanceLoginUrl' => 'InstanceLoginUrl',
        'renewBuyUrl' => 'RenewBuyUrl',
        'serverDeliveryUrl' => 'ServerDeliveryUrl',
        'upgradeBuyUrl' => 'UpgradeBuyUrl',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->dashboardActions)) {
            Model::validateArray($this->dashboardActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['Actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['Actions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aiCustomerConfigUrl) {
            $res['AiCustomerConfigUrl'] = $this->aiCustomerConfigUrl;
        }

        if (null !== $this->aiDesignUrl) {
            $res['AiDesignUrl'] = $this->aiDesignUrl;
        }

        if (null !== $this->appPublishUrl) {
            $res['AppPublishUrl'] = $this->appPublishUrl;
        }

        if (null !== $this->dashboardActions) {
            if (\is_array($this->dashboardActions)) {
                $res['DashboardActions'] = [];
                $n1 = 0;
                foreach ($this->dashboardActions as $item1) {
                    $res['DashboardActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->designUrl) {
            $res['DesignUrl'] = $this->designUrl;
        }

        if (null !== $this->instanceLoginUrl) {
            $res['InstanceLoginUrl'] = $this->instanceLoginUrl;
        }

        if (null !== $this->renewBuyUrl) {
            $res['RenewBuyUrl'] = $this->renewBuyUrl;
        }

        if (null !== $this->serverDeliveryUrl) {
            $res['ServerDeliveryUrl'] = $this->serverDeliveryUrl;
        }

        if (null !== $this->upgradeBuyUrl) {
            $res['UpgradeBuyUrl'] = $this->upgradeBuyUrl;
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
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['Actions'] as $item1) {
                    $model->actions[$n1] = actions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AiCustomerConfigUrl'])) {
            $model->aiCustomerConfigUrl = $map['AiCustomerConfigUrl'];
        }

        if (isset($map['AiDesignUrl'])) {
            $model->aiDesignUrl = $map['AiDesignUrl'];
        }

        if (isset($map['AppPublishUrl'])) {
            $model->appPublishUrl = $map['AppPublishUrl'];
        }

        if (isset($map['DashboardActions'])) {
            if (!empty($map['DashboardActions'])) {
                $model->dashboardActions = [];
                $n1 = 0;
                foreach ($map['DashboardActions'] as $item1) {
                    $model->dashboardActions[$n1] = dashboardActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DesignUrl'])) {
            $model->designUrl = $map['DesignUrl'];
        }

        if (isset($map['InstanceLoginUrl'])) {
            $model->instanceLoginUrl = $map['InstanceLoginUrl'];
        }

        if (isset($map['RenewBuyUrl'])) {
            $model->renewBuyUrl = $map['RenewBuyUrl'];
        }

        if (isset($map['ServerDeliveryUrl'])) {
            $model->serverDeliveryUrl = $map['ServerDeliveryUrl'];
        }

        if (isset($map['UpgradeBuyUrl'])) {
            $model->upgradeBuyUrl = $map['UpgradeBuyUrl'];
        }

        return $model;
    }
}
