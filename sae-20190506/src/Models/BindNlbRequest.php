<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class BindNlbRequest extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $listeners;

    /**
     * @var string
     */
    public $nlbId;

    /**
     * @var string
     */
    public $zoneMappings;
    protected $_name = [
        'addressType' => 'AddressType',
        'appId' => 'AppId',
        'listeners' => 'Listeners',
        'nlbId' => 'NlbId',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        if (null !== $this->nlbId) {
            $res['NlbId'] = $this->nlbId;
        }

        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = $this->zoneMappings;
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
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        if (isset($map['NlbId'])) {
            $model->nlbId = $map['NlbId'];
        }

        if (isset($map['ZoneMappings'])) {
            $model->zoneMappings = $map['ZoneMappings'];
        }

        return $model;
    }
}
