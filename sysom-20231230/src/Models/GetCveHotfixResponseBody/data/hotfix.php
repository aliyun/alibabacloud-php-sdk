<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetCveHotfixResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetCveHotfixResponseBody\data\hotfix\packages;

class hotfix extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hotfixName;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var packages[]
     */
    public $packages;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'hotfixName' => 'hotfixName',
        'moduleName' => 'moduleName',
        'packages' => 'packages',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->packages)) {
            Model::validateArray($this->packages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->hotfixName) {
            $res['hotfixName'] = $this->hotfixName;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->packages) {
            if (\is_array($this->packages)) {
                $res['packages'] = [];
                $n1 = 0;
                foreach ($this->packages as $item1) {
                    $res['packages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['hotfixName'])) {
            $model->hotfixName = $map['hotfixName'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['packages'])) {
            if (!empty($map['packages'])) {
                $model->packages = [];
                $n1 = 0;
                foreach ($map['packages'] as $item1) {
                    $model->packages[$n1] = packages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
