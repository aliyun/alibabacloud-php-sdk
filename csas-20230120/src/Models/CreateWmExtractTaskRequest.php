<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateWmExtractTaskRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $documentIsCapture;

    /**
     * @description This parameter is required.
     *
     * @example https://example.com/test-****.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description This parameter is required.
     *
     * @example test-****.pdf
     *
     * @var string
     */
    public $filename;

    /**
     * @example false
     *
     * @var bool
     */
    public $videoIsLong;

    /**
     * @example 1
     *
     * @var string
     */
    public $videoSpeed;

    /**
     * @example 32
     *
     * @var int
     */
    public $wmInfoSize;

    /**
     * @description This parameter is required.
     *
     * @example PureDocument
     *
     * @var string
     */
    public $wmType;
    protected $_name = [
        'documentIsCapture' => 'DocumentIsCapture',
        'fileUrl'           => 'FileUrl',
        'filename'          => 'Filename',
        'videoIsLong'       => 'VideoIsLong',
        'videoSpeed'        => 'VideoSpeed',
        'wmInfoSize'        => 'WmInfoSize',
        'wmType'            => 'WmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentIsCapture) {
            $res['DocumentIsCapture'] = $this->documentIsCapture;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->videoIsLong) {
            $res['VideoIsLong'] = $this->videoIsLong;
        }
        if (null !== $this->videoSpeed) {
            $res['VideoSpeed'] = $this->videoSpeed;
        }
        if (null !== $this->wmInfoSize) {
            $res['WmInfoSize'] = $this->wmInfoSize;
        }
        if (null !== $this->wmType) {
            $res['WmType'] = $this->wmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWmExtractTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentIsCapture'])) {
            $model->documentIsCapture = $map['DocumentIsCapture'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['VideoIsLong'])) {
            $model->videoIsLong = $map['VideoIsLong'];
        }
        if (isset($map['VideoSpeed'])) {
            $model->videoSpeed = $map['VideoSpeed'];
        }
        if (isset($map['WmInfoSize'])) {
            $model->wmInfoSize = $map['WmInfoSize'];
        }
        if (isset($map['WmType'])) {
            $model->wmType = $map['WmType'];
        }

        return $model;
    }
}
