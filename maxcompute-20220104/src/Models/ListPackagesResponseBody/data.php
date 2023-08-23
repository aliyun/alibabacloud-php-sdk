<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data\createdPackages;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data\installedPackages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The packages that were created.
     *
     * @var createdPackages[]
     */
    public $createdPackages;

    /**
     * @description The packages that were installed.
     *
     * @var installedPackages[]
     */
    public $installedPackages;
    protected $_name = [
        'createdPackages'   => 'createdPackages',
        'installedPackages' => 'installedPackages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdPackages) {
            $res['createdPackages'] = [];
            if (null !== $this->createdPackages && \is_array($this->createdPackages)) {
                $n = 0;
                foreach ($this->createdPackages as $item) {
                    $res['createdPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->installedPackages) {
            $res['installedPackages'] = [];
            if (null !== $this->installedPackages && \is_array($this->installedPackages)) {
                $n = 0;
                foreach ($this->installedPackages as $item) {
                    $res['installedPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdPackages'])) {
            if (!empty($map['createdPackages'])) {
                $model->createdPackages = [];
                $n                      = 0;
                foreach ($map['createdPackages'] as $item) {
                    $model->createdPackages[$n++] = null !== $item ? createdPackages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['installedPackages'])) {
            if (!empty($map['installedPackages'])) {
                $model->installedPackages = [];
                $n                        = 0;
                foreach ($map['installedPackages'] as $item) {
                    $model->installedPackages[$n++] = null !== $item ? installedPackages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
