<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig\outputFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig\tileOut;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig\tileOutputFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig\timeArray;

class snapshotConfig extends Model
{
    /**
     * @var string
     */
    public $frameType;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $num;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var tileOut
     */
    public $tileOut;

    /**
     * @var tileOutputFile
     */
    public $tileOutputFile;

    /**
     * @var string
     */
    public $time;

    /**
     * @var timeArray
     */
    public $timeArray;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'frameType' => 'FrameType',
        'height' => 'Height',
        'interval' => 'Interval',
        'num' => 'Num',
        'outputFile' => 'OutputFile',
        'tileOut' => 'TileOut',
        'tileOutputFile' => 'TileOutputFile',
        'time' => 'Time',
        'timeArray' => 'TimeArray',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->outputFile) {
            $this->outputFile->validate();
        }
        if (null !== $this->tileOut) {
            $this->tileOut->validate();
        }
        if (null !== $this->tileOutputFile) {
            $this->tileOutputFile->validate();
        }
        if (null !== $this->timeArray) {
            $this->timeArray->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameType) {
            $res['FrameType'] = $this->frameType;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toArray($noStream) : $this->outputFile;
        }

        if (null !== $this->tileOut) {
            $res['TileOut'] = null !== $this->tileOut ? $this->tileOut->toArray($noStream) : $this->tileOut;
        }

        if (null !== $this->tileOutputFile) {
            $res['TileOutputFile'] = null !== $this->tileOutputFile ? $this->tileOutputFile->toArray($noStream) : $this->tileOutputFile;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->timeArray) {
            $res['TimeArray'] = null !== $this->timeArray ? $this->timeArray->toArray($noStream) : $this->timeArray;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['FrameType'])) {
            $model->frameType = $map['FrameType'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }

        if (isset($map['TileOut'])) {
            $model->tileOut = tileOut::fromMap($map['TileOut']);
        }

        if (isset($map['TileOutputFile'])) {
            $model->tileOutputFile = tileOutputFile::fromMap($map['TileOutputFile']);
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TimeArray'])) {
            $model->timeArray = timeArray::fromMap($map['TimeArray']);
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
