<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody\taskInfo\recordFileList\vodMediaList;

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

    /**
     * @var vodMediaList[]
     */
    public $vodMediaList;
    protected $_name = [
        'hlsFileList' => 'HlsFileList',
        'mp3FileList' => 'Mp3FileList',
        'mp4FileList' => 'Mp4FileList',
        'vodMediaList' => 'VodMediaList',
    ];

    public function validate()
    {
        if (\is_array($this->hlsFileList)) {
            Model::validateArray($this->hlsFileList);
        }
        if (\is_array($this->mp3FileList)) {
            Model::validateArray($this->mp3FileList);
        }
        if (\is_array($this->mp4FileList)) {
            Model::validateArray($this->mp4FileList);
        }
        if (\is_array($this->vodMediaList)) {
            Model::validateArray($this->vodMediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hlsFileList) {
            if (\is_array($this->hlsFileList)) {
                $res['HlsFileList'] = [];
                $n1 = 0;
                foreach ($this->hlsFileList as $item1) {
                    $res['HlsFileList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mp3FileList) {
            if (\is_array($this->mp3FileList)) {
                $res['Mp3FileList'] = [];
                $n1 = 0;
                foreach ($this->mp3FileList as $item1) {
                    $res['Mp3FileList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mp4FileList) {
            if (\is_array($this->mp4FileList)) {
                $res['Mp4FileList'] = [];
                $n1 = 0;
                foreach ($this->mp4FileList as $item1) {
                    $res['Mp4FileList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vodMediaList) {
            if (\is_array($this->vodMediaList)) {
                $res['VodMediaList'] = [];
                $n1 = 0;
                foreach ($this->vodMediaList as $item1) {
                    $res['VodMediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HlsFileList'])) {
            if (!empty($map['HlsFileList'])) {
                $model->hlsFileList = [];
                $n1 = 0;
                foreach ($map['HlsFileList'] as $item1) {
                    $model->hlsFileList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mp3FileList'])) {
            if (!empty($map['Mp3FileList'])) {
                $model->mp3FileList = [];
                $n1 = 0;
                foreach ($map['Mp3FileList'] as $item1) {
                    $model->mp3FileList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mp4FileList'])) {
            if (!empty($map['Mp4FileList'])) {
                $model->mp4FileList = [];
                $n1 = 0;
                foreach ($map['Mp4FileList'] as $item1) {
                    $model->mp4FileList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VodMediaList'])) {
            if (!empty($map['VodMediaList'])) {
                $model->vodMediaList = [];
                $n1 = 0;
                foreach ($map['VodMediaList'] as $item1) {
                    $model->vodMediaList[$n1] = vodMediaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
