<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CreateDocParserJobRequest extends Model
{
    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fileFormat' => 'FileFormat',
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'outputFormat' => 'OutputFormat',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
