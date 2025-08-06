<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig;

use AlibabaCloud\Dara\Model;

class optionalRelayStates extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $relayState;
    protected $_name = [
        'displayName' => 'DisplayName',
        'relayState' => 'RelayState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->relayState) {
            $res['RelayState'] = $this->relayState;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['RelayState'])) {
            $model->relayState = $map['RelayState'];
        }

        return $model;
    }
}
