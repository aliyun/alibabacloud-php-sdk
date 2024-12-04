<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig;

use AlibabaCloud\Tea\Model;

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
        'relayState'  => 'RelayState',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return optionalRelayStates
     */
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
