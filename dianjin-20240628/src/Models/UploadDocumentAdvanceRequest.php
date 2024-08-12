<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class UploadDocumentAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @description This parameter is required.
     *
     * @example test.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example https://oss-xxx.hangzhou.com/test.pdf
     *
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @description This parameter is required.
     *
     * @example sjdhbcsj
     *
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'data'          => 'data',
        'fileName'      => 'fileName',
        'fileUrlObject' => 'fileUrl',
        'libraryId'     => 'libraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileUrlObject) {
            $res['fileUrl'] = $this->fileUrlObject;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDocumentAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileUrl'])) {
            $model->fileUrlObject = $map['fileUrl'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        return $model;
    }
}
