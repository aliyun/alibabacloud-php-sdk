<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppRecordTemplateRequest;

use AlibabaCloud\Tea\Model;

class recordTemplate extends Model
{
    /**
     * @example 180
     *
     * @var int
     */
    public $delayStopTime;

    /**
     * @description This parameter is required.
     *
     * @example record/{AppId}/{ChannelId}_{TaskId}/{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $filePrefix;

    /**
     * @description This parameter is required.
     *
     * @example 1800
     *
     * @var int
     */
    public $fileSplitInterval;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $formats;

    /**
     * @var string[]
     */
    public $layoutIds;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @description This parameter is required.
     *
     * @example 模版
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'delayStopTime' => 'DelayStopTime',
        'filePrefix' => 'FilePrefix',
        'fileSplitInterval' => 'FileSplitInterval',
        'formats' => 'Formats',
        'layoutIds' => 'LayoutIds',
        'mediaEncode' => 'MediaEncode',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
