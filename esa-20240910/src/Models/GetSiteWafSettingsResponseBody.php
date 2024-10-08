<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSiteWafSettingsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var WafSiteSettings
     */
    public $settings;
    protected $_name = [
        'requestId' => 'RequestId',
        'settings'  => 'Settings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSiteWafSettingsResponseBody
     */
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
