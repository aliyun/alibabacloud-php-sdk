<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody\taskInfo\recordFileList;

use AlibabaCloud\Dara\Model;

class vodMediaList extends Model
{
    /**
     * @var string[]
     */
    public $mediaIds;

    /**
     * @var string[]
     */
    public $mergedIds;

    /**
     * @var string
     */
    public $stream;
    protected $_name = [
        'mediaIds' => 'MediaIds',
        'mergedIds' => 'MergedIds',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        if (\is_array($this->mediaIds)) {
            Model::validateArray($this->mediaIds);
        }
        if (\is_array($this->mergedIds)) {
            Model::validateArray($this->mergedIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaIds) {
            if (\is_array($this->mediaIds)) {
                $res['MediaIds'] = [];
                $n1 = 0;
                foreach ($this->mediaIds as $item1) {
                    $res['MediaIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mergedIds) {
            if (\is_array($this->mergedIds)) {
                $res['MergedIds'] = [];
                $n1 = 0;
                foreach ($this->mergedIds as $item1) {
                    $res['MergedIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['MediaIds'])) {
            if (!empty($map['MediaIds'])) {
                $model->mediaIds = [];
                $n1 = 0;
                foreach ($map['MediaIds'] as $item1) {
                    $model->mediaIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MergedIds'])) {
            if (!empty($map['MergedIds'])) {
                $model->mergedIds = [];
                $n1 = 0;
                foreach ($map['MergedIds'] as $item1) {
                    $model->mergedIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
