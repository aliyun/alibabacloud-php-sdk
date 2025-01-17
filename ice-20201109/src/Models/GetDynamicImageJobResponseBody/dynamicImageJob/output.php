<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob\output\ossFile;

class output extends Model
{
    /**
     * @var string
     */
    public $media;
    /**
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
        if (null !== $this->ossFile) {
            $this->ossFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }

        if (null !== $this->ossFile) {
            $res['OssFile'] = null !== $this->ossFile ? $this->ossFile->toArray($noStream) : $this->ossFile;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
