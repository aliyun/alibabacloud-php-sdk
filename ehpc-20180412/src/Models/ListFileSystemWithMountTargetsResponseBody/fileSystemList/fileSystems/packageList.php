<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\packageList\packages;

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
        if (\is_array($this->packages)) {
            Model::validateArray($this->packages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packages) {
            if (\is_array($this->packages)) {
                $res['Packages'] = [];
                $n1 = 0;
                foreach ($this->packages as $item1) {
                    $res['Packages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Packages'])) {
            if (!empty($map['Packages'])) {
                $model->packages = [];
                $n1 = 0;
                foreach ($map['Packages'] as $item1) {
                    $model->packages[$n1++] = packages::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
