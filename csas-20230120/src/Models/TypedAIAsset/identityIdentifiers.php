<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\identityIdentifiers\peProductIdentity;
use AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\identityIdentifiers\windowsAppxIdentity;

class identityIdentifiers extends Model
{
    /**
     * @var string[]
     */
    public $desktopManifestName;

    /**
     * @var string[]
     */
    public $jetbrainsPluginId;

    /**
     * @var string[]
     */
    public $macosBundleId;

    /**
     * @var string[]
     */
    public $npmPackage;

    /**
     * @var peProductIdentity[]
     */
    public $peProductIdentity;

    /**
     * @var string[]
     */
    public $pypiPackage;

    /**
     * @var string[]
     */
    public $vscodeExtensionId;

    /**
     * @var windowsAppxIdentity[]
     */
    public $windowsAppxIdentity;

    /**
     * @var string[]
     */
    public $windowsPackageFamilyName;
    protected $_name = [
        'desktopManifestName' => 'desktop_manifest_name',
        'jetbrainsPluginId' => 'jetbrains_plugin_id',
        'macosBundleId' => 'macos_bundle_id',
        'npmPackage' => 'npm_package',
        'peProductIdentity' => 'pe_product_identity',
        'pypiPackage' => 'pypi_package',
        'vscodeExtensionId' => 'vscode_extension_id',
        'windowsAppxIdentity' => 'windows_appx_identity',
        'windowsPackageFamilyName' => 'windows_package_family_name',
    ];

    public function validate()
    {
        if (\is_array($this->desktopManifestName)) {
            Model::validateArray($this->desktopManifestName);
        }
        if (\is_array($this->jetbrainsPluginId)) {
            Model::validateArray($this->jetbrainsPluginId);
        }
        if (\is_array($this->macosBundleId)) {
            Model::validateArray($this->macosBundleId);
        }
        if (\is_array($this->npmPackage)) {
            Model::validateArray($this->npmPackage);
        }
        if (\is_array($this->peProductIdentity)) {
            Model::validateArray($this->peProductIdentity);
        }
        if (\is_array($this->pypiPackage)) {
            Model::validateArray($this->pypiPackage);
        }
        if (\is_array($this->vscodeExtensionId)) {
            Model::validateArray($this->vscodeExtensionId);
        }
        if (\is_array($this->windowsAppxIdentity)) {
            Model::validateArray($this->windowsAppxIdentity);
        }
        if (\is_array($this->windowsPackageFamilyName)) {
            Model::validateArray($this->windowsPackageFamilyName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopManifestName) {
            if (\is_array($this->desktopManifestName)) {
                $res['desktop_manifest_name'] = [];
                $n1 = 0;
                foreach ($this->desktopManifestName as $item1) {
                    $res['desktop_manifest_name'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jetbrainsPluginId) {
            if (\is_array($this->jetbrainsPluginId)) {
                $res['jetbrains_plugin_id'] = [];
                $n1 = 0;
                foreach ($this->jetbrainsPluginId as $item1) {
                    $res['jetbrains_plugin_id'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->macosBundleId) {
            if (\is_array($this->macosBundleId)) {
                $res['macos_bundle_id'] = [];
                $n1 = 0;
                foreach ($this->macosBundleId as $item1) {
                    $res['macos_bundle_id'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->npmPackage) {
            if (\is_array($this->npmPackage)) {
                $res['npm_package'] = [];
                $n1 = 0;
                foreach ($this->npmPackage as $item1) {
                    $res['npm_package'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->peProductIdentity) {
            if (\is_array($this->peProductIdentity)) {
                $res['pe_product_identity'] = [];
                $n1 = 0;
                foreach ($this->peProductIdentity as $item1) {
                    $res['pe_product_identity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pypiPackage) {
            if (\is_array($this->pypiPackage)) {
                $res['pypi_package'] = [];
                $n1 = 0;
                foreach ($this->pypiPackage as $item1) {
                    $res['pypi_package'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vscodeExtensionId) {
            if (\is_array($this->vscodeExtensionId)) {
                $res['vscode_extension_id'] = [];
                $n1 = 0;
                foreach ($this->vscodeExtensionId as $item1) {
                    $res['vscode_extension_id'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->windowsAppxIdentity) {
            if (\is_array($this->windowsAppxIdentity)) {
                $res['windows_appx_identity'] = [];
                $n1 = 0;
                foreach ($this->windowsAppxIdentity as $item1) {
                    $res['windows_appx_identity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->windowsPackageFamilyName) {
            if (\is_array($this->windowsPackageFamilyName)) {
                $res['windows_package_family_name'] = [];
                $n1 = 0;
                foreach ($this->windowsPackageFamilyName as $item1) {
                    $res['windows_package_family_name'][$n1] = $item1;
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
        if (isset($map['desktop_manifest_name'])) {
            if (!empty($map['desktop_manifest_name'])) {
                $model->desktopManifestName = [];
                $n1 = 0;
                foreach ($map['desktop_manifest_name'] as $item1) {
                    $model->desktopManifestName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['jetbrains_plugin_id'])) {
            if (!empty($map['jetbrains_plugin_id'])) {
                $model->jetbrainsPluginId = [];
                $n1 = 0;
                foreach ($map['jetbrains_plugin_id'] as $item1) {
                    $model->jetbrainsPluginId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['macos_bundle_id'])) {
            if (!empty($map['macos_bundle_id'])) {
                $model->macosBundleId = [];
                $n1 = 0;
                foreach ($map['macos_bundle_id'] as $item1) {
                    $model->macosBundleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['npm_package'])) {
            if (!empty($map['npm_package'])) {
                $model->npmPackage = [];
                $n1 = 0;
                foreach ($map['npm_package'] as $item1) {
                    $model->npmPackage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pe_product_identity'])) {
            if (!empty($map['pe_product_identity'])) {
                $model->peProductIdentity = [];
                $n1 = 0;
                foreach ($map['pe_product_identity'] as $item1) {
                    $model->peProductIdentity[$n1] = peProductIdentity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pypi_package'])) {
            if (!empty($map['pypi_package'])) {
                $model->pypiPackage = [];
                $n1 = 0;
                foreach ($map['pypi_package'] as $item1) {
                    $model->pypiPackage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['vscode_extension_id'])) {
            if (!empty($map['vscode_extension_id'])) {
                $model->vscodeExtensionId = [];
                $n1 = 0;
                foreach ($map['vscode_extension_id'] as $item1) {
                    $model->vscodeExtensionId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['windows_appx_identity'])) {
            if (!empty($map['windows_appx_identity'])) {
                $model->windowsAppxIdentity = [];
                $n1 = 0;
                foreach ($map['windows_appx_identity'] as $item1) {
                    $model->windowsAppxIdentity[$n1] = windowsAppxIdentity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['windows_package_family_name'])) {
            if (!empty($map['windows_package_family_name'])) {
                $model->windowsPackageFamilyName = [];
                $n1 = 0;
                foreach ($map['windows_package_family_name'] as $item1) {
                    $model->windowsPackageFamilyName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
