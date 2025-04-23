<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data\createdPackages;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data\installedPackages;

class data extends Model
{
    /**
     * @var createdPackages[]
     */
    public $createdPackages;

    /**
     * @var installedPackages[]
     */
    public $installedPackages;
    protected $_name = [
        'createdPackages' => 'createdPackages',
        'installedPackages' => 'installedPackages',
    ];

    public function validate()
    {
        if (\is_array($this->createdPackages)) {
            Model::validateArray($this->createdPackages);
        }
        if (\is_array($this->installedPackages)) {
            Model::validateArray($this->installedPackages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdPackages) {
            if (\is_array($this->createdPackages)) {
                $res['createdPackages'] = [];
                $n1 = 0;
                foreach ($this->createdPackages as $item1) {
                    $res['createdPackages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->installedPackages) {
            if (\is_array($this->installedPackages)) {
                $res['installedPackages'] = [];
                $n1 = 0;
                foreach ($this->installedPackages as $item1) {
                    $res['installedPackages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['createdPackages'])) {
            if (!empty($map['createdPackages'])) {
                $model->createdPackages = [];
                $n1 = 0;
                foreach ($map['createdPackages'] as $item1) {
                    $model->createdPackages[$n1++] = createdPackages::fromMap($item1);
                }
            }
        }

        if (isset($map['installedPackages'])) {
            if (!empty($map['installedPackages'])) {
                $model->installedPackages = [];
                $n1 = 0;
                foreach ($map['installedPackages'] as $item1) {
                    $model->installedPackages[$n1++] = installedPackages::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
