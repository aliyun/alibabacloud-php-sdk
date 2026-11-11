<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetUploadInfoRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $fileType;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'fileType' => 'FileType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
