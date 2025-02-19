<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitDigitalDocStructureJobAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $fileNameExtension;
    /**
     * @var Stream
     */
    public $fileUrlObject;
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
        'fileName'           => 'FileName',
        'fileNameExtension'  => 'FileNameExtension',
        'fileUrlObject'      => 'FileUrl',
        'imageStrategy'      => 'ImageStrategy',
        'ossBucket'          => 'OssBucket',
        'ossEndpoint'        => 'OssEndpoint',
        'revealMarkdown'     => 'RevealMarkdown',
        'useUrlResponseBody' => 'UseUrlResponseBody',
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

        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }

        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
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

        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
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
