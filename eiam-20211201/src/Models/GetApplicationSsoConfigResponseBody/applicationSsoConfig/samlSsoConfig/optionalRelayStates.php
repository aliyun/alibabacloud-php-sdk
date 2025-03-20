<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\samlSsoConfig;

use AlibabaCloud\Tea\Model;

class optionalRelayStates extends Model
{
    /**
     * @description The display name of the RelayState
     *
     * @example Ram Account SSO
     *
     * @var string
     */
    public $displayName;

    /**
     * @description RelayState.The user will see the display names of multiple optional redirect addresses in the application card of the application portal. After the user clicks and completes SSO, they will automatically jump to the corresponding address. This field can only be filled in after the default redirect address is filled in.
     *
     * @example https://home.console.aliyun.com
     *
     * @var string
     */
    public $relayState;
    protected $_name = [
        'displayName' => 'DisplayName',
        'relayState' => 'RelayState',
    ];

    public function validate() {}

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
