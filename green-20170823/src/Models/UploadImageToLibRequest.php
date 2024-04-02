<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UploadImageToLibRequest extends Model
{
    /**
     * @var int
     */
    public $imageLibId;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $urls;
    protected $_name = [
        'imageLibId' => 'ImageLibId',
        'images'     => 'Images',
        'sourceIp'   => 'SourceIp',
        'urls'       => 'Urls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageLibId) {
            $res['ImageLibId'] = $this->imageLibId;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->urls) {
            $res['Urls'] = $this->urls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadImageToLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageLibId'])) {
            $model->imageLibId = $map['ImageLibId'];
        }
        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Urls'])) {
            $model->urls = $map['Urls'];
        }

        return $model;
    }
}
