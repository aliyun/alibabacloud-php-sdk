<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeNumberDistrictInfoStatusResponseBody;

use AlibabaCloud\Tea\Model;

class parsingVersion extends Model
{
    /**
     * @example template (3).xlsx
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 659968
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $parseProgress;

    /**
     * @example 64615
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'fileName'      => 'FileName',
        'fileSize'      => 'FileSize',
        'parseProgress' => 'ParseProgress',
        'versionId'     => 'VersionId',
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
        if (null !== $this->parseProgress) {
            $res['ParseProgress'] = $this->parseProgress;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parsingVersion
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
        if (isset($map['ParseProgress'])) {
            $model->parseProgress = $map['ParseProgress'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
