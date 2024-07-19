<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest\files;
use AlibabaCloud\Tea\Model;

class UpdateDictRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowCover;

    /**
     * @description This parameter is required.
     *
     * @var files[]
     */
    public $files;

    /**
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example MAIN
     *
     * @var string
     */
    public $type;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'allowCover' => 'allowCover',
        'files'      => 'files',
        'sourceType' => 'sourceType',
        'type'       => 'type',
        'dryRun'     => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCover) {
            $res['allowCover'] = $this->allowCover;
        }
        if (null !== $this->files) {
            $res['files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['files'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateDictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowCover'])) {
            $model->allowCover = $map['allowCover'];
        }
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
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
