<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedVersions;

use AlibabaCloud\Dara\Model;

class providerVersions extends Model
{
    /**
     * @var string
     */
    public $providerName;
    /**
     * @var string[]
     */
    public $supportedVersions;
    protected $_name = [
        'providerName'      => 'ProviderName',
        'supportedVersions' => 'SupportedVersions',
    ];

    public function validate()
    {
        if (\is_array($this->supportedVersions)) {
            Model::validateArray($this->supportedVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->supportedVersions) {
            if (\is_array($this->supportedVersions)) {
                $res['SupportedVersions'] = [];
                $n1                       = 0;
                foreach ($this->supportedVersions as $item1) {
                    $res['SupportedVersions'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['SupportedVersions'])) {
            if (!empty($map['SupportedVersions'])) {
                $model->supportedVersions = [];
                $n1                       = 0;
                foreach ($map['SupportedVersions'] as $item1) {
                    $model->supportedVersions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
