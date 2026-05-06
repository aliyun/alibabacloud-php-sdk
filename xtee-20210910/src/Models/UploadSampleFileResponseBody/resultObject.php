<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\UploadSampleFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UploadSampleFileResponseBody\resultObject\columnStats;
use AlibabaCloud\SDK\Xtee\V20210910\Models\UploadSampleFileResponseBody\resultObject\previewData;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $beyondBacktrackingPeriodNum;

    /**
     * @var columnStats[]
     */
    public $columnStats;

    /**
     * @var string
     */
    public $dateType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string[]
     */
    public $notExistScenes;

    /**
     * @var string[]
     */
    public $phoneInvalidList;

    /**
     * @var previewData
     */
    public $previewData;

    /**
     * @var int
     */
    public $rowCount;
    protected $_name = [
        'beyondBacktrackingPeriodNum' => 'BeyondBacktrackingPeriodNum',
        'columnStats' => 'ColumnStats',
        'dateType' => 'DateType',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileUrl' => 'FileUrl',
        'notExistScenes' => 'NotExistScenes',
        'phoneInvalidList' => 'PhoneInvalidList',
        'previewData' => 'PreviewData',
        'rowCount' => 'RowCount',
    ];

    public function validate()
    {
        if (\is_array($this->columnStats)) {
            Model::validateArray($this->columnStats);
        }
        if (\is_array($this->notExistScenes)) {
            Model::validateArray($this->notExistScenes);
        }
        if (\is_array($this->phoneInvalidList)) {
            Model::validateArray($this->phoneInvalidList);
        }
        if (null !== $this->previewData) {
            $this->previewData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beyondBacktrackingPeriodNum) {
            $res['BeyondBacktrackingPeriodNum'] = $this->beyondBacktrackingPeriodNum;
        }

        if (null !== $this->columnStats) {
            if (\is_array($this->columnStats)) {
                $res['ColumnStats'] = [];
                $n1 = 0;
                foreach ($this->columnStats as $item1) {
                    $res['ColumnStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->notExistScenes) {
            if (\is_array($this->notExistScenes)) {
                $res['NotExistScenes'] = [];
                $n1 = 0;
                foreach ($this->notExistScenes as $item1) {
                    $res['NotExistScenes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->phoneInvalidList) {
            if (\is_array($this->phoneInvalidList)) {
                $res['PhoneInvalidList'] = [];
                $n1 = 0;
                foreach ($this->phoneInvalidList as $item1) {
                    $res['PhoneInvalidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->previewData) {
            $res['PreviewData'] = null !== $this->previewData ? $this->previewData->toArray($noStream) : $this->previewData;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
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
        if (isset($map['BeyondBacktrackingPeriodNum'])) {
            $model->beyondBacktrackingPeriodNum = $map['BeyondBacktrackingPeriodNum'];
        }

        if (isset($map['ColumnStats'])) {
            if (!empty($map['ColumnStats'])) {
                $model->columnStats = [];
                $n1 = 0;
                foreach ($map['ColumnStats'] as $item1) {
                    $model->columnStats[$n1] = columnStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['NotExistScenes'])) {
            if (!empty($map['NotExistScenes'])) {
                $model->notExistScenes = [];
                $n1 = 0;
                foreach ($map['NotExistScenes'] as $item1) {
                    $model->notExistScenes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PhoneInvalidList'])) {
            if (!empty($map['PhoneInvalidList'])) {
                $model->phoneInvalidList = [];
                $n1 = 0;
                foreach ($map['PhoneInvalidList'] as $item1) {
                    $model->phoneInvalidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PreviewData'])) {
            $model->previewData = previewData::fromMap($map['PreviewData']);
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        return $model;
    }
}
