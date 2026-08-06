<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListDataInsightDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListDataInsightDirectoriesResponseBody\directory\subDirectories;

class directory extends Model
{
    /**
     * @var int
     */
    public $dirCapacity;

    /**
     * @var int
     */
    public $dirCapacityOffline;

    /**
     * @var int
     */
    public $dirCapacityOnline;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var int
     */
    public $fileCountOffline;

    /**
     * @var int
     */
    public $fileCountOnline;

    /**
     * @var subDirectories[]
     */
    public $subDirectories;
    protected $_name = [
        'dirCapacity' => 'DirCapacity',
        'dirCapacityOffline' => 'DirCapacityOffline',
        'dirCapacityOnline' => 'DirCapacityOnline',
        'fileCount' => 'FileCount',
        'fileCountOffline' => 'FileCountOffline',
        'fileCountOnline' => 'FileCountOnline',
        'subDirectories' => 'SubDirectories',
    ];

    public function validate()
    {
        if (\is_array($this->subDirectories)) {
            Model::validateArray($this->subDirectories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dirCapacity) {
            $res['DirCapacity'] = $this->dirCapacity;
        }

        if (null !== $this->dirCapacityOffline) {
            $res['DirCapacityOffline'] = $this->dirCapacityOffline;
        }

        if (null !== $this->dirCapacityOnline) {
            $res['DirCapacityOnline'] = $this->dirCapacityOnline;
        }

        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }

        if (null !== $this->fileCountOffline) {
            $res['FileCountOffline'] = $this->fileCountOffline;
        }

        if (null !== $this->fileCountOnline) {
            $res['FileCountOnline'] = $this->fileCountOnline;
        }

        if (null !== $this->subDirectories) {
            if (\is_array($this->subDirectories)) {
                $res['SubDirectories'] = [];
                $n1 = 0;
                foreach ($this->subDirectories as $item1) {
                    $res['SubDirectories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DirCapacity'])) {
            $model->dirCapacity = $map['DirCapacity'];
        }

        if (isset($map['DirCapacityOffline'])) {
            $model->dirCapacityOffline = $map['DirCapacityOffline'];
        }

        if (isset($map['DirCapacityOnline'])) {
            $model->dirCapacityOnline = $map['DirCapacityOnline'];
        }

        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }

        if (isset($map['FileCountOffline'])) {
            $model->fileCountOffline = $map['FileCountOffline'];
        }

        if (isset($map['FileCountOnline'])) {
            $model->fileCountOnline = $map['FileCountOnline'];
        }

        if (isset($map['SubDirectories'])) {
            if (!empty($map['SubDirectories'])) {
                $model->subDirectories = [];
                $n1 = 0;
                foreach ($map['SubDirectories'] as $item1) {
                    $model->subDirectories[$n1] = subDirectories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
