<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectClientEventDashboardResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectClientEventDashboardResponseBody\data\filePathStats;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectClientEventDashboardResponseBody\data\fileTypeStats;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectClientEventDashboardResponseBody\data\processNameStats;

class data extends Model
{
    /**
     * @var filePathStats[]
     */
    public $filePathStats;

    /**
     * @var fileTypeStats[]
     */
    public $fileTypeStats;

    /**
     * @var int
     */
    public $oneDayFileChangeCount;

    /**
     * @var processNameStats[]
     */
    public $processNameStats;

    /**
     * @var int
     */
    public $recentFileChangeCount;

    /**
     * @var int
     */
    public $serverCount;
    protected $_name = [
        'filePathStats' => 'FilePathStats',
        'fileTypeStats' => 'FileTypeStats',
        'oneDayFileChangeCount' => 'OneDayFileChangeCount',
        'processNameStats' => 'ProcessNameStats',
        'recentFileChangeCount' => 'RecentFileChangeCount',
        'serverCount' => 'ServerCount',
    ];

    public function validate()
    {
        if (\is_array($this->filePathStats)) {
            Model::validateArray($this->filePathStats);
        }
        if (\is_array($this->fileTypeStats)) {
            Model::validateArray($this->fileTypeStats);
        }
        if (\is_array($this->processNameStats)) {
            Model::validateArray($this->processNameStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePathStats) {
            if (\is_array($this->filePathStats)) {
                $res['FilePathStats'] = [];
                $n1 = 0;
                foreach ($this->filePathStats as $item1) {
                    $res['FilePathStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileTypeStats) {
            if (\is_array($this->fileTypeStats)) {
                $res['FileTypeStats'] = [];
                $n1 = 0;
                foreach ($this->fileTypeStats as $item1) {
                    $res['FileTypeStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->oneDayFileChangeCount) {
            $res['OneDayFileChangeCount'] = $this->oneDayFileChangeCount;
        }

        if (null !== $this->processNameStats) {
            if (\is_array($this->processNameStats)) {
                $res['ProcessNameStats'] = [];
                $n1 = 0;
                foreach ($this->processNameStats as $item1) {
                    $res['ProcessNameStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recentFileChangeCount) {
            $res['RecentFileChangeCount'] = $this->recentFileChangeCount;
        }

        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
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
        if (isset($map['FilePathStats'])) {
            if (!empty($map['FilePathStats'])) {
                $model->filePathStats = [];
                $n1 = 0;
                foreach ($map['FilePathStats'] as $item1) {
                    $model->filePathStats[$n1] = filePathStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileTypeStats'])) {
            if (!empty($map['FileTypeStats'])) {
                $model->fileTypeStats = [];
                $n1 = 0;
                foreach ($map['FileTypeStats'] as $item1) {
                    $model->fileTypeStats[$n1] = fileTypeStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OneDayFileChangeCount'])) {
            $model->oneDayFileChangeCount = $map['OneDayFileChangeCount'];
        }

        if (isset($map['ProcessNameStats'])) {
            if (!empty($map['ProcessNameStats'])) {
                $model->processNameStats = [];
                $n1 = 0;
                foreach ($map['ProcessNameStats'] as $item1) {
                    $model->processNameStats[$n1] = processNameStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RecentFileChangeCount'])) {
            $model->recentFileChangeCount = $map['RecentFileChangeCount'];
        }

        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }

        return $model;
    }
}
