<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest\files;

class UpdateDictRequest extends Model
{
    /**
     * @var bool
     */
    public $allowCover;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'allowCover' => 'allowCover',
        'files' => 'files',
        'sourceType' => 'sourceType',
        'type' => 'type',
        'dryRun' => 'dryRun',
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
        if (null !== $this->allowCover) {
            $res['allowCover'] = $this->allowCover;
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

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['allowCover'])) {
            $model->allowCover = $map['allowCover'];
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

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
