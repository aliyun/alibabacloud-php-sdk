<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateAtiAlertSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $alertConfig;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'alertGroup' => 'AlertGroup',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = $this->alertConfig;
        }

        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
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
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = $map['AlertConfig'];
        }

        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
