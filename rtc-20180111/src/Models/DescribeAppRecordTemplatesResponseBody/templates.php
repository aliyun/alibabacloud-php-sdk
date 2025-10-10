<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $delayStopTime;

    /**
     * @var string
     */
    public $filePrefix;

    /**
     * @var int
     */
    public $fileSplitInterval;

    /**
     * @var string[]
     */
    public $formats;

    /**
     * @var string[]
     */
    public $layoutIds;

    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'delayStopTime' => 'DelayStopTime',
        'filePrefix' => 'FilePrefix',
        'fileSplitInterval' => 'FileSplitInterval',
        'formats' => 'Formats',
        'layoutIds' => 'LayoutIds',
        'mediaEncode' => 'MediaEncode',
        'name' => 'Name',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->formats)) {
            Model::validateArray($this->formats);
        }
        if (\is_array($this->layoutIds)) {
            Model::validateArray($this->layoutIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->delayStopTime) {
            $res['DelayStopTime'] = $this->delayStopTime;
        }

        if (null !== $this->filePrefix) {
            $res['FilePrefix'] = $this->filePrefix;
        }

        if (null !== $this->fileSplitInterval) {
            $res['FileSplitInterval'] = $this->fileSplitInterval;
        }

        if (null !== $this->formats) {
            if (\is_array($this->formats)) {
                $res['Formats'] = [];
                $n1 = 0;
                foreach ($this->formats as $item1) {
                    $res['Formats'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->layoutIds) {
            if (\is_array($this->layoutIds)) {
                $res['LayoutIds'] = [];
                $n1 = 0;
                foreach ($this->layoutIds as $item1) {
                    $res['LayoutIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DelayStopTime'])) {
            $model->delayStopTime = $map['DelayStopTime'];
        }

        if (isset($map['FilePrefix'])) {
            $model->filePrefix = $map['FilePrefix'];
        }

        if (isset($map['FileSplitInterval'])) {
            $model->fileSplitInterval = $map['FileSplitInterval'];
        }

        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = [];
                $n1 = 0;
                foreach ($map['Formats'] as $item1) {
                    $model->formats[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = [];
                $n1 = 0;
                foreach ($map['LayoutIds'] as $item1) {
                    $model->layoutIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
