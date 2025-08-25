<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acc\V20240402\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheShrinkRequest\acrRegistryInfos;
use AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheShrinkRequest\imageRegistryCredentials;
use AlibabaCloud\SDK\Acc\V20240402\Models\CreateImageCacheShrinkRequest\tags;

class CreateImageCacheShrinkRequest extends Model
{
    /**
     * @var acrRegistryInfos[]
     */
    public $acrRegistryInfos;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $imageCacheName;

    /**
     * @var imageRegistryCredentials[]
     */
    public $imageRegistryCredentials;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $networkConfigShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'acrRegistryInfos' => 'AcrRegistryInfos',
        'clientToken' => 'ClientToken',
        'imageCacheName' => 'ImageCacheName',
        'imageRegistryCredentials' => 'ImageRegistryCredentials',
        'images' => 'Images',
        'networkConfigShrink' => 'NetworkConfig',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->acrRegistryInfos)) {
            Model::validateArray($this->acrRegistryInfos);
        }
        if (\is_array($this->imageRegistryCredentials)) {
            Model::validateArray($this->imageRegistryCredentials);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrRegistryInfos) {
            if (\is_array($this->acrRegistryInfos)) {
                $res['AcrRegistryInfos'] = [];
                $n1 = 0;
                foreach ($this->acrRegistryInfos as $item1) {
                    $res['AcrRegistryInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }

        if (null !== $this->imageRegistryCredentials) {
            if (\is_array($this->imageRegistryCredentials)) {
                $res['ImageRegistryCredentials'] = [];
                $n1 = 0;
                foreach ($this->imageRegistryCredentials as $item1) {
                    $res['ImageRegistryCredentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkConfigShrink) {
            $res['NetworkConfig'] = $this->networkConfigShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AcrRegistryInfos'])) {
            if (!empty($map['AcrRegistryInfos'])) {
                $model->acrRegistryInfos = [];
                $n1 = 0;
                foreach ($map['AcrRegistryInfos'] as $item1) {
                    $model->acrRegistryInfos[$n1] = acrRegistryInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ImageCacheName'])) {
            $model->imageCacheName = $map['ImageCacheName'];
        }

        if (isset($map['ImageRegistryCredentials'])) {
            if (!empty($map['ImageRegistryCredentials'])) {
                $model->imageRegistryCredentials = [];
                $n1 = 0;
                foreach ($map['ImageRegistryCredentials'] as $item1) {
                    $model->imageRegistryCredentials[$n1] = imageRegistryCredentials::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkConfig'])) {
            $model->networkConfigShrink = $map['NetworkConfig'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
