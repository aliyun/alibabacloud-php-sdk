<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeNumberDistrictInfoStatusResponseBody;

use AlibabaCloud\Tea\Model;

class appliedVersion extends Model
{
    /**
     * @example 3.mkv
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 93
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 402681645884289024
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'fileName'  => 'FileName',
        'fileSize'  => 'FileSize',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appliedVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
