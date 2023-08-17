<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitTradeDocumentPackageExtractJobAdvanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $customExtractionRange;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @example pdf
     *
     * @var string
     */
    public $fileNameExtension;

    /**
     * @example https://gw.alipayobjects.com/os/basement_prod/598b9edf-5287-4065-9e36-464305c60698.pdf
     *
     * @var Stream
     */
    public $fileUrlObject;
    protected $_name = [
        'customExtractionRange' => 'CustomExtractionRange',
        'fileName'              => 'FileName',
        'fileNameExtension'     => 'FileNameExtension',
        'fileUrlObject'         => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customExtractionRange) {
            $res['CustomExtractionRange'] = $this->customExtractionRange;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }
        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTradeDocumentPackageExtractJobAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomExtractionRange'])) {
            if (!empty($map['CustomExtractionRange'])) {
                $model->customExtractionRange = $map['CustomExtractionRange'];
            }
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }

        return $model;
    }
}
