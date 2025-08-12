<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;

use AlibabaCloud\Dara\Model;

class fileInfo extends Model
{
    /**
     * @var string
     */
    public $fileNamePattern;

    /**
     * @var string[]
     */
    public $filePathPrefix;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $sliceNamePattern;
    protected $_name = [
        'fileNamePattern' => 'FileNamePattern',
        'filePathPrefix' => 'FilePathPrefix',
        'format' => 'Format',
        'sliceNamePattern' => 'SliceNamePattern',
    ];

    public function validate()
    {
        if (\is_array($this->filePathPrefix)) {
            Model::validateArray($this->filePathPrefix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileNamePattern) {
            $res['FileNamePattern'] = $this->fileNamePattern;
        }

        if (null !== $this->filePathPrefix) {
            if (\is_array($this->filePathPrefix)) {
                $res['FilePathPrefix'] = [];
                $n1 = 0;
                foreach ($this->filePathPrefix as $item1) {
                    $res['FilePathPrefix'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->sliceNamePattern) {
            $res['SliceNamePattern'] = $this->sliceNamePattern;
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
        if (isset($map['FileNamePattern'])) {
            $model->fileNamePattern = $map['FileNamePattern'];
        }

        if (isset($map['FilePathPrefix'])) {
            if (!empty($map['FilePathPrefix'])) {
                $model->filePathPrefix = [];
                $n1 = 0;
                foreach ($map['FilePathPrefix'] as $item1) {
                    $model->filePathPrefix[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['SliceNamePattern'])) {
            $model->sliceNamePattern = $map['SliceNamePattern'];
        }

        return $model;
    }
}
