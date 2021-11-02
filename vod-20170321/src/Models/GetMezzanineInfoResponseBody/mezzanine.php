<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine\audioStreamList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponseBody\mezzanine\videoStreamList;
use AlibabaCloud\Tea\Model;

class mezzanine extends Model
{
    /**
     * @var audioStreamList[]
     */
    public $audioStreamList;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var videoStreamList[]
     */
    public $videoStreamList;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'audioStreamList' => 'AudioStreamList',
        'bitrate'         => 'Bitrate',
        'creationTime'    => 'CreationTime',
        'duration'        => 'Duration',
        'fileName'        => 'FileName',
        'fileURL'         => 'FileURL',
        'fps'             => 'Fps',
        'height'          => 'Height',
        'outputType'      => 'OutputType',
        'size'            => 'Size',
        'status'          => 'Status',
        'videoId'         => 'VideoId',
        'videoStreamList' => 'VideoStreamList',
        'width'           => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = [];
            if (null !== $this->audioStreamList && \is_array($this->audioStreamList)) {
                $n = 0;
                foreach ($this->audioStreamList as $item) {
                    $res['AudioStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = [];
            if (null !== $this->videoStreamList && \is_array($this->videoStreamList)) {
                $n = 0;
                foreach ($this->videoStreamList as $item) {
                    $res['VideoStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mezzanine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioStreamList'])) {
            if (!empty($map['AudioStreamList'])) {
                $model->audioStreamList = [];
                $n                      = 0;
                foreach ($map['AudioStreamList'] as $item) {
                    $model->audioStreamList[$n++] = null !== $item ? audioStreamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoStreamList'])) {
            if (!empty($map['VideoStreamList'])) {
                $model->videoStreamList = [];
                $n                      = 0;
                foreach ($map['VideoStreamList'] as $item) {
                    $model->videoStreamList[$n++] = null !== $item ? videoStreamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
