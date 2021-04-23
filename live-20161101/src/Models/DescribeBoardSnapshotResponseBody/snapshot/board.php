<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot\board\configs;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot\board\pages;
use AlibabaCloud\Tea\Model;

class board extends Model
{
    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $appUid;

    /**
     * @var string
     */
    public $boardId;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var pages[]
     */
    public $pages;

    /**
     * @var int
     */
    public $eventTimestamp;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'updateTimestamp' => 'UpdateTimestamp',
        'appUid'          => 'AppUid',
        'boardId'         => 'BoardId',
        'configs'         => 'Configs',
        'pages'           => 'Pages',
        'eventTimestamp'  => 'EventTimestamp',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pages) {
            $res['Pages'] = [];
            if (null !== $this->pages && \is_array($this->pages)) {
                $n = 0;
                foreach ($this->pages as $item) {
                    $res['Pages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventTimestamp) {
            $res['EventTimestamp'] = $this->eventTimestamp;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return board
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pages'])) {
            if (!empty($map['Pages'])) {
                $model->pages = [];
                $n            = 0;
                foreach ($map['Pages'] as $item) {
                    $model->pages[$n++] = null !== $item ? pages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventTimestamp'])) {
            $model->eventTimestamp = $map['EventTimestamp'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
