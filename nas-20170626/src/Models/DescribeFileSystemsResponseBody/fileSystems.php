<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

class fileSystems extends Model
{
    /**
     * @var fileSystem[]
     */
    public $fileSystem;
    protected $_name = [
        'fileSystem' => 'FileSystem',
    ];

    public function validate()
    {
        if (\is_array($this->fileSystem)) {
            Model::validateArray($this->fileSystem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystem) {
            if (\is_array($this->fileSystem)) {
                $res['FileSystem'] = [];
                $n1 = 0;
                foreach ($this->fileSystem as $item1) {
                    $res['FileSystem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FileSystem'])) {
            if (!empty($map['FileSystem'])) {
                $model->fileSystem = [];
                $n1 = 0;
                foreach ($map['FileSystem'] as $item1) {
                    $model->fileSystem[$n1] = fileSystem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
