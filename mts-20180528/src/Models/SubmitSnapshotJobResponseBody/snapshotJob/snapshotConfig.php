<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob\snapshotConfig\outputFile;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob\snapshotConfig\tileOut;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitSnapshotJobResponseBody\snapshotJob\snapshotConfig\tileOutputFile;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $width;
    protected $_name = [
        'frameType'      => 'FrameType',
        'height'         => 'Height',
        'interval'       => 'Interval',
        'num'            => 'Num',
        'outputFile'     => 'OutputFile',
        'tileOut'        => 'TileOut',
        'tileOutputFile' => 'TileOutputFile',
        'time'           => 'Time',
        'width'          => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->tileOut) {
            $res['TileOut'] = null !== $this->tileOut ? $this->tileOut->toMap() : null;
        }
        if (null !== $this->tileOutputFile) {
            $res['TileOutputFile'] = null !== $this->tileOutputFile ? $this->tileOutputFile->toMap() : null;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotConfig
     */
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
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
