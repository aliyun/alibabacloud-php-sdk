<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitConvertPdfToExcelJobAdvanceRequest extends Model
{
    /**
     * @example convertPdfToExcel.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://gw.alipayobjects.com/os/basement_prod/598b9edf-5287-4065-9e36-464305c60698.pdf
     *
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var bool
     */
    public $forceExportInnerImage;

    /**
     * @var bool
     */
    public $forceMergeExcel;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'fileName' => 'FileName',
        'fileUrlObject' => 'FileUrl',
        'forceExportInnerImage' => 'ForceExportInnerImage',
        'forceMergeExcel' => 'ForceMergeExcel',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }
        if (null !== $this->forceExportInnerImage) {
            $res['ForceExportInnerImage'] = $this->forceExportInnerImage;
        }
        if (null !== $this->forceMergeExcel) {
            $res['ForceMergeExcel'] = $this->forceMergeExcel;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitConvertPdfToExcelJobAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }
        if (isset($map['ForceExportInnerImage'])) {
            $model->forceExportInnerImage = $map['ForceExportInnerImage'];
        }
        if (isset($map['ForceMergeExcel'])) {
            $model->forceMergeExcel = $map['ForceMergeExcel'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
