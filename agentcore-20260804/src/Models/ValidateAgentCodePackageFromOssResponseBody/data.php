<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ValidateAgentCodePackageFromOssResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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

    /**
     * @var string
     */
    public $sourceUri;
    protected $_name = [
        'fileName' => 'fileName',
        'fileSize' => 'fileSize',
        'format' => 'format',
        'sourceUri' => 'sourceUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->sourceUri) {
            $res['sourceUri'] = $this->sourceUri;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['sourceUri'])) {
            $model->sourceUri = $map['sourceUri'];
        }

        return $model;
    }
}
