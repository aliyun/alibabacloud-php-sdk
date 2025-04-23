<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexResponseBody\result\versions\files;

class versions extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'desc' => 'desc',
        'files' => 'files',
        'name' => 'name',
        'status' => 'status',
        'updateTime' => 'updateTime',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['files'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['files'] as $item1) {
                    $model->files[$n1++] = files::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
