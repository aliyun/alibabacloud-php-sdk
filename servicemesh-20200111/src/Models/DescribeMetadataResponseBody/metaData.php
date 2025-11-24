<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody\metaData\playgroundScene;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody\metaData\proEdition;

class metaData extends Model
{
    /**
     * @var mixed[][]
     */
    public $compatibilityInfoList;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var playgroundScene
     */
    public $playgroundScene;

    /**
     * @var proEdition
     */
    public $proEdition;

    /**
     * @var string[]
     */
    public $regions;

    /**
     * @var mixed[][]
     */
    public $versionCrds;

    /**
     * @var mixed[][]
     */
    public $versionRegistry;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'compatibilityInfoList' => 'CompatibilityInfoList',
        'currentVersion' => 'CurrentVersion',
        'playgroundScene' => 'PlaygroundScene',
        'proEdition' => 'ProEdition',
        'regions' => 'Regions',
        'versionCrds' => 'VersionCrds',
        'versionRegistry' => 'VersionRegistry',
        'versions' => 'Versions',
    ];

    public function validate()
    {
        if (\is_array($this->compatibilityInfoList)) {
            Model::validateArray($this->compatibilityInfoList);
        }
        if (null !== $this->playgroundScene) {
            $this->playgroundScene->validate();
        }
        if (null !== $this->proEdition) {
            $this->proEdition->validate();
        }
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        if (\is_array($this->versionCrds)) {
            Model::validateArray($this->versionCrds);
        }
        if (\is_array($this->versionRegistry)) {
            Model::validateArray($this->versionRegistry);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compatibilityInfoList) {
            if (\is_array($this->compatibilityInfoList)) {
                $res['CompatibilityInfoList'] = [];
                $n1 = 0;
                foreach ($this->compatibilityInfoList as $item1) {
                    if (\is_array($item1)) {
                        $res['CompatibilityInfoList'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['CompatibilityInfoList'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }

        if (null !== $this->playgroundScene) {
            $res['PlaygroundScene'] = null !== $this->playgroundScene ? $this->playgroundScene->toArray($noStream) : $this->playgroundScene;
        }

        if (null !== $this->proEdition) {
            $res['ProEdition'] = null !== $this->proEdition ? $this->proEdition->toArray($noStream) : $this->proEdition;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->versionCrds) {
            if (\is_array($this->versionCrds)) {
                $res['VersionCrds'] = [];
                $n1 = 0;
                foreach ($this->versionCrds as $item1) {
                    if (\is_array($item1)) {
                        $res['VersionCrds'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['VersionCrds'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->versionRegistry) {
            if (\is_array($this->versionRegistry)) {
                $res['VersionRegistry'] = [];
                $n1 = 0;
                foreach ($this->versionRegistry as $item1) {
                    if (\is_array($item1)) {
                        $res['VersionRegistry'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['VersionRegistry'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = $item1;
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
        if (isset($map['CompatibilityInfoList'])) {
            if (!empty($map['CompatibilityInfoList'])) {
                $model->compatibilityInfoList = [];
                $n1 = 0;
                foreach ($map['CompatibilityInfoList'] as $item1) {
                    if (!empty($item1)) {
                        $model->compatibilityInfoList[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->compatibilityInfoList[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }

        if (isset($map['PlaygroundScene'])) {
            $model->playgroundScene = playgroundScene::fromMap($map['PlaygroundScene']);
        }

        if (isset($map['ProEdition'])) {
            $model->proEdition = proEdition::fromMap($map['ProEdition']);
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VersionCrds'])) {
            if (!empty($map['VersionCrds'])) {
                $model->versionCrds = [];
                $n1 = 0;
                foreach ($map['VersionCrds'] as $item1) {
                    if (!empty($item1)) {
                        $model->versionCrds[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->versionCrds[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['VersionRegistry'])) {
            if (!empty($map['VersionRegistry'])) {
                $model->versionRegistry = [];
                $n1 = 0;
                foreach ($map['VersionRegistry'] as $item1) {
                    if (!empty($item1)) {
                        $model->versionRegistry[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->versionRegistry[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
