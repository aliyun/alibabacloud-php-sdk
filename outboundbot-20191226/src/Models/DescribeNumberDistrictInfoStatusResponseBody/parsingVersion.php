<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeNumberDistrictInfoStatusResponseBody;

use AlibabaCloud\Dara\Model;

class parsingVersion extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $parseProgress;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'parseProgress' => 'ParseProgress',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->parseProgress) {
            $res['ParseProgress'] = $this->parseProgress;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['ParseProgress'])) {
            $model->parseProgress = $map['ParseProgress'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
