<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetSiteWafSettingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var WafSiteSettings
     */
    public $settings;
    protected $_name = [
        'requestId' => 'RequestId',
        'settings' => 'Settings',
    ];

    public function validate()
    {
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Settings'])) {
            $model->settings = WafSiteSettings::fromMap($map['Settings']);
        }

        return $model;
    }
}
