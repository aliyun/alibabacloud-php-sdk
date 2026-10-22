<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class codePackageInfo extends Model
{
    /**
     * @var string
     */
    public $crc64;

    /**
     * @var string
     */
    public $etag;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'crc64' => 'crc64',
        'etag' => 'etag',
        'fileName' => 'fileName',
        'fileSize' => 'fileSize',
        'format' => 'format',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crc64) {
            $res['crc64'] = $this->crc64;
        }

        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
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
        if (isset($map['crc64'])) {
            $model->crc64 = $map['crc64'];
        }

        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        return $model;
    }
}
