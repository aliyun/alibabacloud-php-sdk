<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmGlobalAlertRequest\alertConfig;
use AlibabaCloud\Tea\Model;

class UpdateCloudGtmGlobalAlertRequest extends Model
{
    /**
     * @example en-US
     *
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
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'alertConfig'    => 'AlertConfig',
        'alertGroup'     => 'AlertGroup',
        'clientToken'    => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = [];
            if (null !== $this->alertConfig && \is_array($this->alertConfig)) {
                $n = 0;
                foreach ($this->alertConfig as $item) {
                    $res['AlertConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmGlobalAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n                  = 0;
                foreach ($map['AlertConfig'] as $item) {
                    $model->alertConfig[$n++] = null !== $item ? alertConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertGroup'])) {
            if (!empty($map['AlertGroup'])) {
                $model->alertGroup = $map['AlertGroup'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
