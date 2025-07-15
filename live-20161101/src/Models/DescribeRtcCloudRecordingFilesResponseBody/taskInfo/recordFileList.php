<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody\taskInfo;

use AlibabaCloud\Tea\Model;

class recordFileList extends Model
{
    /**
     * @var string[]
     */
    public $hlsFileList;

    /**
     * @var string[]
     */
    public $mp3FileList;

    /**
     * @var string[]
     */
    public $mp4FileList;
    protected $_name = [
        'hlsFileList' => 'HlsFileList',
        'mp3FileList' => 'Mp3FileList',
        'mp4FileList' => 'Mp4FileList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hlsFileList) {
            $res['HlsFileList'] = $this->hlsFileList;
        }
        if (null !== $this->mp3FileList) {
            $res['Mp3FileList'] = $this->mp3FileList;
        }
        if (null !== $this->mp4FileList) {
            $res['Mp4FileList'] = $this->mp4FileList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordFileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HlsFileList'])) {
            if (!empty($map['HlsFileList'])) {
                $model->hlsFileList = $map['HlsFileList'];
            }
        }
        if (isset($map['Mp3FileList'])) {
            if (!empty($map['Mp3FileList'])) {
                $model->mp3FileList = $map['Mp3FileList'];
            }
        }
        if (isset($map['Mp4FileList'])) {
            if (!empty($map['Mp4FileList'])) {
                $model->mp4FileList = $map['Mp4FileList'];
            }
        }

        return $model;
    }
}
