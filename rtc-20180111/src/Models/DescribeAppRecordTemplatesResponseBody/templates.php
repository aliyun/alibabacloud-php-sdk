<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example 2020-09-04T06:22:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 180
     *
     * @var int
     */
    public $delayStopTime;

    /**
     * @example record/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $filePrefix;

    /**
     * @example 1800
     *
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
     * @example 1
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @example 测试
     *
     * @var string
     */
    public $name;

    /**
     * @example wv7N****
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
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

    /**
     * @param array $map
     *
     * @return templates
     */
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
                $model->formats = $map['Formats'];
            }
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
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
