<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class SubmitDigitalDocStructureJobRequest extends Model
{
    /**
     * @example docStructure.pdf
     *
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
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $imageStrategy;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var bool
     */
    public $revealMarkdown;

    /**
     * @var bool
     */
    public $useUrlResponseBody;
    protected $_name = [
        'fileName' => 'FileName',
        'fileNameExtension' => 'FileNameExtension',
        'fileUrl' => 'FileUrl',
        'imageStrategy' => 'ImageStrategy',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'revealMarkdown' => 'RevealMarkdown',
        'useUrlResponseBody' => 'UseUrlResponseBody',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->imageStrategy) {
            $res['ImageStrategy'] = $this->imageStrategy;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->revealMarkdown) {
            $res['RevealMarkdown'] = $this->revealMarkdown;
        }
        if (null !== $this->useUrlResponseBody) {
            $res['UseUrlResponseBody'] = $this->useUrlResponseBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDigitalDocStructureJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['ImageStrategy'])) {
            $model->imageStrategy = $map['ImageStrategy'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['RevealMarkdown'])) {
            $model->revealMarkdown = $map['RevealMarkdown'];
        }
        if (isset($map['UseUrlResponseBody'])) {
            $model->useUrlResponseBody = $map['UseUrlResponseBody'];
        }

        return $model;
    }
}
