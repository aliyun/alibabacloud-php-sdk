<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\packageList\packages;
use AlibabaCloud\Tea\Model;

class packageList extends Model
{
    /**
     * @var packages[]
     */
    public $packages;
    protected $_name = [
        'packages' => 'Packages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packages) {
            $res['Packages'] = [];
            if (null !== $this->packages && \is_array($this->packages)) {
                $n = 0;
                foreach ($this->packages as $item) {
                    $res['Packages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Packages'])) {
            if (!empty($map['Packages'])) {
                $model->packages = [];
                $n               = 0;
                foreach ($map['Packages'] as $item) {
                    $model->packages[$n++] = null !== $item ? packages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
