<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedVersions\providerVersions;

class supportedVersions extends Model
{
    /**
     * @var providerVersions[]
     */
    public $providerVersions;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $transform;

    /**
     * @var string[]
     */
    public $updateAllowedTransforms;
    protected $_name = [
        'providerVersions' => 'ProviderVersions',
        'terraformVersion' => 'TerraformVersion',
        'transform' => 'Transform',
        'updateAllowedTransforms' => 'UpdateAllowedTransforms',
    ];

    public function validate()
    {
        if (\is_array($this->providerVersions)) {
            Model::validateArray($this->providerVersions);
        }
        if (\is_array($this->updateAllowedTransforms)) {
            Model::validateArray($this->updateAllowedTransforms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->providerVersions) {
            if (\is_array($this->providerVersions)) {
                $res['ProviderVersions'] = [];
                $n1 = 0;
                foreach ($this->providerVersions as $item1) {
                    $res['ProviderVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terraformVersion) {
            $res['TerraformVersion'] = $this->terraformVersion;
        }

        if (null !== $this->transform) {
            $res['Transform'] = $this->transform;
        }

        if (null !== $this->updateAllowedTransforms) {
            if (\is_array($this->updateAllowedTransforms)) {
                $res['UpdateAllowedTransforms'] = [];
                $n1 = 0;
                foreach ($this->updateAllowedTransforms as $item1) {
                    $res['UpdateAllowedTransforms'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ProviderVersions'])) {
            if (!empty($map['ProviderVersions'])) {
                $model->providerVersions = [];
                $n1 = 0;
                foreach ($map['ProviderVersions'] as $item1) {
                    $model->providerVersions[$n1] = providerVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TerraformVersion'])) {
            $model->terraformVersion = $map['TerraformVersion'];
        }

        if (isset($map['Transform'])) {
            $model->transform = $map['Transform'];
        }

        if (isset($map['UpdateAllowedTransforms'])) {
            if (!empty($map['UpdateAllowedTransforms'])) {
                $model->updateAllowedTransforms = [];
                $n1 = 0;
                foreach ($map['UpdateAllowedTransforms'] as $item1) {
                    $model->updateAllowedTransforms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
