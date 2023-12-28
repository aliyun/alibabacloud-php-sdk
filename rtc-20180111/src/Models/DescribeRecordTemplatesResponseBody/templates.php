<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponseBody\templates\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponseBody\templates\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponseBody\templates\watermarks;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $backgroundColor;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;

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
     * @example false
     *
     * @var bool
     */
    public $enableM3u8DateTime;

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
     * @example http://example.com/callback
     *
     * @var string
     */
    public $httpCallbackUrl;

    /**
     * @var int[]
     */
    public $layoutIds;

    /**
     * @example 50
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @example record-callback-queue
     *
     * @var string
     */
    public $mnsQueue;

    /**
     * @var string
     */
    public $name;

    /**
     * @example rtc-record-oss
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example record/pre/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @example 4IN_1080P
     *
     * @var string
     */
    public $taskProfile;

    /**
     * @example 1ca698e2-57fa-4314-8e11-00d950d4****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'backgroundColor'    => 'BackgroundColor',
        'backgrounds'        => 'Backgrounds',
        'clockWidgets'       => 'ClockWidgets',
        'createTime'         => 'CreateTime',
        'delayStopTime'      => 'DelayStopTime',
        'enableM3u8DateTime' => 'EnableM3u8DateTime',
        'fileSplitInterval'  => 'FileSplitInterval',
        'formats'            => 'Formats',
        'httpCallbackUrl'    => 'HttpCallbackUrl',
        'layoutIds'          => 'LayoutIds',
        'mediaEncode'        => 'MediaEncode',
        'mnsQueue'           => 'MnsQueue',
        'name'               => 'Name',
        'ossBucket'          => 'OssBucket',
        'ossFilePrefix'      => 'OssFilePrefix',
        'taskProfile'        => 'TaskProfile',
        'templateId'         => 'TemplateId',
        'watermarks'         => 'Watermarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->backgrounds) {
            $res['Backgrounds'] = [];
            if (null !== $this->backgrounds && \is_array($this->backgrounds)) {
                $n = 0;
                foreach ($this->backgrounds as $item) {
                    $res['Backgrounds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clockWidgets) {
            $res['ClockWidgets'] = [];
            if (null !== $this->clockWidgets && \is_array($this->clockWidgets)) {
                $n = 0;
                foreach ($this->clockWidgets as $item) {
                    $res['ClockWidgets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->delayStopTime) {
            $res['DelayStopTime'] = $this->delayStopTime;
        }
        if (null !== $this->enableM3u8DateTime) {
            $res['EnableM3u8DateTime'] = $this->enableM3u8DateTime;
        }
        if (null !== $this->fileSplitInterval) {
            $res['FileSplitInterval'] = $this->fileSplitInterval;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->httpCallbackUrl) {
            $res['HttpCallbackUrl'] = $this->httpCallbackUrl;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->mnsQueue) {
            $res['MnsQueue'] = $this->mnsQueue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
        }
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->watermarks) {
            $res['Watermarks'] = [];
            if (null !== $this->watermarks && \is_array($this->watermarks)) {
                $n = 0;
                foreach ($this->watermarks as $item) {
                    $res['Watermarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }
        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n                  = 0;
                foreach ($map['Backgrounds'] as $item) {
                    $model->backgrounds[$n++] = null !== $item ? backgrounds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n                   = 0;
                foreach ($map['ClockWidgets'] as $item) {
                    $model->clockWidgets[$n++] = null !== $item ? clockWidgets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DelayStopTime'])) {
            $model->delayStopTime = $map['DelayStopTime'];
        }
        if (isset($map['EnableM3u8DateTime'])) {
            $model->enableM3u8DateTime = $map['EnableM3u8DateTime'];
        }
        if (isset($map['FileSplitInterval'])) {
            $model->fileSplitInterval = $map['FileSplitInterval'];
        }
        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = $map['Formats'];
            }
        }
        if (isset($map['HttpCallbackUrl'])) {
            $model->httpCallbackUrl = $map['HttpCallbackUrl'];
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['MnsQueue'])) {
            $model->mnsQueue = $map['MnsQueue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
        }
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n                 = 0;
                foreach ($map['Watermarks'] as $item) {
                    $model->watermarks[$n++] = null !== $item ? watermarks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
