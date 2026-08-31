<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetDirectoriesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAssetDirectoriesResponseBody\data\directoryList\modifier;

class directoryList extends Model
{
    /**
     * @var string
     */
    public $directoryDescription;

    /**
     * @var int
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var string
     */
    public $fullPath;

    /**
     * @var int[]
     */
    public $fullPathIds;

    /**
     * @var string[]
     */
    public $fullPathNames;

    /**
     * @var bool
     */
    public $hasChildren;

    /**
     * @var int
     */
    public $level;

    /**
     * @var modifier
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $parentDirectoryId;
    protected $_name = [
        'directoryDescription' => 'DirectoryDescription',
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'fullPath' => 'FullPath',
        'fullPathIds' => 'FullPathIds',
        'fullPathNames' => 'FullPathNames',
        'hasChildren' => 'HasChildren',
        'level' => 'Level',
        'modifier' => 'Modifier',
        'modifyTime' => 'ModifyTime',
        'parentDirectoryId' => 'ParentDirectoryId',
    ];

    public function validate()
    {
        if (\is_array($this->fullPathIds)) {
            Model::validateArray($this->fullPathIds);
        }
        if (\is_array($this->fullPathNames)) {
            Model::validateArray($this->fullPathNames);
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryDescription) {
            $res['DirectoryDescription'] = $this->directoryDescription;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->fullPath) {
            $res['FullPath'] = $this->fullPath;
        }

        if (null !== $this->fullPathIds) {
            if (\is_array($this->fullPathIds)) {
                $res['FullPathIds'] = [];
                $n1 = 0;
                foreach ($this->fullPathIds as $item1) {
                    $res['FullPathIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fullPathNames) {
            if (\is_array($this->fullPathNames)) {
                $res['FullPathNames'] = [];
                $n1 = 0;
                foreach ($this->fullPathNames as $item1) {
                    $res['FullPathNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasChildren) {
            $res['HasChildren'] = $this->hasChildren;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->parentDirectoryId) {
            $res['ParentDirectoryId'] = $this->parentDirectoryId;
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
        if (isset($map['DirectoryDescription'])) {
            $model->directoryDescription = $map['DirectoryDescription'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['FullPath'])) {
            $model->fullPath = $map['FullPath'];
        }

        if (isset($map['FullPathIds'])) {
            if (!empty($map['FullPathIds'])) {
                $model->fullPathIds = [];
                $n1 = 0;
                foreach ($map['FullPathIds'] as $item1) {
                    $model->fullPathIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FullPathNames'])) {
            if (!empty($map['FullPathNames'])) {
                $model->fullPathNames = [];
                $n1 = 0;
                foreach ($map['FullPathNames'] as $item1) {
                    $model->fullPathNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HasChildren'])) {
            $model->hasChildren = $map['HasChildren'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = modifier::fromMap($map['Modifier']);
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ParentDirectoryId'])) {
            $model->parentDirectoryId = $map['ParentDirectoryId'];
        }

        return $model;
    }
}
