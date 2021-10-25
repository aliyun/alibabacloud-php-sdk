<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems;
use AlibabaCloud\Tea\Model;

class fileSystemList extends Model
{
    /**
     * @var fileSystems[]
     */
    public $fileSystems;
    protected $_name = [
        'fileSystems' => 'FileSystems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystems) {
            $res['FileSystems'] = [];
            if (null !== $this->fileSystems && \is_array($this->fileSystems)) {
                $n = 0;
                foreach ($this->fileSystems as $item) {
                    $res['FileSystems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystems'])) {
            if (!empty($map['FileSystems'])) {
                $model->fileSystems = [];
                $n                  = 0;
                foreach ($map['FileSystems'] as $item) {
                    $model->fileSystems[$n++] = null !== $item ? fileSystems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
