<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems;

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
        if (\is_array($this->fileSystems)) {
            Model::validateArray($this->fileSystems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystems) {
            if (\is_array($this->fileSystems)) {
                $res['FileSystems'] = [];
                $n1 = 0;
                foreach ($this->fileSystems as $item1) {
                    $res['FileSystems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FileSystems'])) {
            if (!empty($map['FileSystems'])) {
                $model->fileSystems = [];
                $n1 = 0;
                foreach ($map['FileSystems'] as $item1) {
                    $model->fileSystems[$n1++] = fileSystems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
