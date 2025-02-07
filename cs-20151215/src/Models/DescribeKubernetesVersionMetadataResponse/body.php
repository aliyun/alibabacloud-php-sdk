<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse\body\images;
use AlibabaCloud\SDK\CS\V20151215\Models\Runtime;

class body extends Model
{
    /**
     * @var mixed[]
     */
    public $capabilities;
    /**
     * @var images[]
     */
    public $images;
    /**
     * @var mixed[]
     */
    public $metaData;
    /**
     * @var Runtime[]
     */
    public $runtimes;
    /**
     * @var string
     */
    public $version;
    /**
     * @var string
     */
    public $releaseDate;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var bool
     */
    public $creatable;
    /**
     * @var string[]
     */
    public $upgradableVersions;
    protected $_name = [
        'capabilities'       => 'capabilities',
        'images'             => 'images',
        'metaData'           => 'meta_data',
        'runtimes'           => 'runtimes',
        'version'            => 'version',
        'releaseDate'        => 'release_date',
        'expirationDate'     => 'expiration_date',
        'creatable'          => 'creatable',
        'upgradableVersions' => 'upgradable_versions',
    ];

    public function validate()
    {
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        if (\is_array($this->runtimes)) {
            Model::validateArray($this->runtimes);
        }
        if (\is_array($this->upgradableVersions)) {
            Model::validateArray($this->upgradableVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['capabilities'] = [];
                foreach ($this->capabilities as $key1 => $value1) {
                    $res['capabilities'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1            = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['meta_data'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['meta_data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->runtimes) {
            if (\is_array($this->runtimes)) {
                $res['runtimes'] = [];
                $n1              = 0;
                foreach ($this->runtimes as $item1) {
                    $res['runtimes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->releaseDate) {
            $res['release_date'] = $this->releaseDate;
        }

        if (null !== $this->expirationDate) {
            $res['expiration_date'] = $this->expirationDate;
        }

        if (null !== $this->creatable) {
            $res['creatable'] = $this->creatable;
        }

        if (null !== $this->upgradableVersions) {
            if (\is_array($this->upgradableVersions)) {
                $res['upgradable_versions'] = [];
                $n1                         = 0;
                foreach ($this->upgradableVersions as $item1) {
                    $res['upgradable_versions'][$n1++] = $item1;
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
        if (isset($map['capabilities'])) {
            if (!empty($map['capabilities'])) {
                $model->capabilities = [];
                foreach ($map['capabilities'] as $key1 => $value1) {
                    $model->capabilities[$key1] = $value1;
                }
            }
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1            = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1++] = images::fromMap($item1);
                }
            }
        }

        if (isset($map['meta_data'])) {
            if (!empty($map['meta_data'])) {
                $model->metaData = [];
                foreach ($map['meta_data'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['runtimes'])) {
            if (!empty($map['runtimes'])) {
                $model->runtimes = [];
                $n1              = 0;
                foreach ($map['runtimes'] as $item1) {
                    $model->runtimes[$n1++] = Runtime::fromMap($item1);
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['release_date'])) {
            $model->releaseDate = $map['release_date'];
        }

        if (isset($map['expiration_date'])) {
            $model->expirationDate = $map['expiration_date'];
        }

        if (isset($map['creatable'])) {
            $model->creatable = $map['creatable'];
        }

        if (isset($map['upgradable_versions'])) {
            if (!empty($map['upgradable_versions'])) {
                $model->upgradableVersions = [];
                $n1                        = 0;
                foreach ($map['upgradable_versions'] as $item1) {
                    $model->upgradableVersions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
