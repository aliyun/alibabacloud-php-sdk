<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob\output\ossFile;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $media;

    /**
     * @description 输出类型为媒资ID时的OSS地址
     *
     * @var ossFile
     */
    public $ossFile;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'media'   => 'Media',
        'ossFile' => 'OssFile',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }
        if (null !== $this->ossFile) {
            $res['OssFile'] = null !== $this->ossFile ? $this->ossFile->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['OssFile'])) {
            $model->ossFile = ossFile::fromMap($map['OssFile']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
