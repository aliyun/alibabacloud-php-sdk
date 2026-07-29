<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class CreateDocParserJobAdvanceRequest extends Model
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
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var string
     */
    public $imageMode;

    /**
     * @var string
     */
    public $ossFileUrl;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $tableFormat;
    protected $_name = [
        'fileFormat' => 'FileFormat',
        'fileName' => 'FileName',
        'fileUrlObject' => 'FileUrl',
        'imageMode' => 'ImageMode',
        'ossFileUrl' => 'OssFileUrl',
        'outputFormat' => 'OutputFormat',
        'regionId' => 'RegionId',
        'resultType' => 'ResultType',
        'tableFormat' => 'TableFormat',
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

        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }

        if (null !== $this->imageMode) {
            $res['ImageMode'] = $this->imageMode;
        }

        if (null !== $this->ossFileUrl) {
            $res['OssFileUrl'] = $this->ossFileUrl;
        }

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->tableFormat) {
            $res['TableFormat'] = $this->tableFormat;
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
            $model->fileUrlObject = $map['FileUrl'];
        }

        if (isset($map['ImageMode'])) {
            $model->imageMode = $map['ImageMode'];
        }

        if (isset($map['OssFileUrl'])) {
            $model->ossFileUrl = $map['OssFileUrl'];
        }

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        if (isset($map['TableFormat'])) {
            $model->tableFormat = $map['TableFormat'];
        }

        return $model;
    }
}
