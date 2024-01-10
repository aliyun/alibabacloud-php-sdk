<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedVersions;

use AlibabaCloud\Tea\Model;

class providerVersions extends Model
{
    /**
     * @description The name of the provider.
     *
     * @example alicloud
     *
     * @var string
     */
    public $providerName;

    /**
     * @description The provider versions.
     *
     * @var string[]
     */
    public $supportedVersions;
    protected $_name = [
        'providerName'      => 'ProviderName',
        'supportedVersions' => 'SupportedVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }
        if (null !== $this->supportedVersions) {
            $res['SupportedVersions'] = $this->supportedVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return providerVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }
        if (isset($map['SupportedVersions'])) {
            if (!empty($map['SupportedVersions'])) {
                $model->supportedVersions = $map['SupportedVersions'];
            }
        }

        return $model;
    }
}
