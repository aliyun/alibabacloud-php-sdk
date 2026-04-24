<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListImagesResponseBody\pagingInfo\imageList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListImagesResponseBody\pagingInfo\imageList\buildConfig\packageInstallationScripts;

class buildConfig extends Model
{
    /**
     * @var string
     */
    public $buildType;

    /**
     * @var packageInstallationScripts[]
     */
    public $packageInstallationScripts;
    protected $_name = [
        'buildType' => 'BuildType',
        'packageInstallationScripts' => 'PackageInstallationScripts',
    ];

    public function validate()
    {
        if (\is_array($this->packageInstallationScripts)) {
            Model::validateArray($this->packageInstallationScripts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildType) {
            $res['BuildType'] = $this->buildType;
        }

        if (null !== $this->packageInstallationScripts) {
            if (\is_array($this->packageInstallationScripts)) {
                $res['PackageInstallationScripts'] = [];
                $n1 = 0;
                foreach ($this->packageInstallationScripts as $item1) {
                    $res['PackageInstallationScripts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BuildType'])) {
            $model->buildType = $map['BuildType'];
        }

        if (isset($map['PackageInstallationScripts'])) {
            if (!empty($map['PackageInstallationScripts'])) {
                $model->packageInstallationScripts = [];
                $n1 = 0;
                foreach ($map['PackageInstallationScripts'] as $item1) {
                    $model->packageInstallationScripts[$n1] = packageInstallationScripts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
