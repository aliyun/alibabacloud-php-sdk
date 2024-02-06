<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportImageStatusResponseBody extends Model
{
    /**
     * @description The export status of the image. Valid values:
     *
     *   Exporting
     *   Exported
     *   ExportError
     *   Unexported
     *
     * @example Exporting
     *
     * @var string
     */
    public $imageExportStatus;

    /**
     * @description The ID of the request.
     *
     * @example 14BBB3A0-3DBE-54F5-AEC8-01D3F6B1EBE2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageExportStatus' => 'ImageExportStatus',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageExportStatus) {
            $res['ImageExportStatus'] = $this->imageExportStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExportImageStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageExportStatus'])) {
            $model->imageExportStatus = $map['ImageExportStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
