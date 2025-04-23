<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmGlobalAlertRequest\alertConfig;

class UpdateCloudGtmGlobalAlertRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var alertConfig[]
     */
    public $alertConfig;

    /**
     * @var string[]
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'alertConfig' => 'AlertConfig',
        'alertGroup' => 'AlertGroup',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        if (\is_array($this->alertConfig)) {
            Model::validateArray($this->alertConfig);
        }
        if (\is_array($this->alertGroup)) {
            Model::validateArray($this->alertGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->alertConfig) {
            if (\is_array($this->alertConfig)) {
                $res['AlertConfig'] = [];
                $n1 = 0;
                foreach ($this->alertConfig as $item1) {
                    $res['AlertConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->alertGroup) {
            if (\is_array($this->alertGroup)) {
                $res['AlertGroup'] = [];
                $n1 = 0;
                foreach ($this->alertGroup as $item1) {
                    $res['AlertGroup'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n1 = 0;
                foreach ($map['AlertConfig'] as $item1) {
                    $model->alertConfig[$n1++] = alertConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['AlertGroup'])) {
            if (!empty($map['AlertGroup'])) {
                $model->alertGroup = [];
                $n1 = 0;
                foreach ($map['AlertGroup'] as $item1) {
                    $model->alertGroup[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
