<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmGlobalAlertShrinkRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $alertConfigShrink;

    /**
     * @var string
     */
    public $alertGroupShrink;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'alertConfigShrink' => 'AlertConfig',
        'alertGroupShrink'  => 'AlertGroup',
        'clientToken'       => 'ClientToken',
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
        if (null !== $this->alertConfigShrink) {
            $res['AlertConfig'] = $this->alertConfigShrink;
        }
        if (null !== $this->alertGroupShrink) {
            $res['AlertGroup'] = $this->alertGroupShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmGlobalAlertShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfigShrink = $map['AlertConfig'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroupShrink = $map['AlertGroup'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
