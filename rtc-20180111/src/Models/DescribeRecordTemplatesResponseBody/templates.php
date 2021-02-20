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
     * @var string
     */
    public $mnsQueue;

    /**
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $delayStopTime;

    /**
     * @var int[]
     */
    public $layoutIds;

    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var int
     */
    public $fileSplitInterval;

    /**
     * @var string
     */
    public $httpCallbackUrl;

    /**
     * @var string[]
     */
    public $formats;

    /**
     * @var int
     */
    public $backgroundColor;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var watermarks[]
     */
    public $watermarks;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $taskProfile;
    protected $_name = [
        'mnsQueue'          => 'MnsQueue',
        'ossFilePrefix'     => 'OssFilePrefix',
        'createTime'        => 'CreateTime',
        'clockWidgets'      => 'ClockWidgets',
        'ossBucket'         => 'OssBucket',
        'delayStopTime'     => 'DelayStopTime',
        'layoutIds'         => 'LayoutIds',
        'mediaEncode'       => 'MediaEncode',
        'fileSplitInterval' => 'FileSplitInterval',
        'httpCallbackUrl'   => 'HttpCallbackUrl',
        'formats'           => 'Formats',
        'backgroundColor'   => 'BackgroundColor',
        'backgrounds'       => 'Backgrounds',
        'watermarks'        => 'Watermarks',
        'name'              => 'Name',
        'templateId'        => 'TemplateId',
        'taskProfile'       => 'TaskProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mnsQueue) {
            $res['MnsQueue'] = $this->mnsQueue;
        }
        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->delayStopTime) {
            $res['DelayStopTime'] = $this->delayStopTime;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->fileSplitInterval) {
            $res['FileSplitInterval'] = $this->fileSplitInterval;
        }
        if (null !== $this->httpCallbackUrl) {
            $res['HttpCallbackUrl'] = $this->httpCallbackUrl;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
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
        if (null !== $this->watermarks) {
            $res['Watermarks'] = [];
            if (null !== $this->watermarks && \is_array($this->watermarks)) {
                $n = 0;
                foreach ($this->watermarks as $item) {
                    $res['Watermarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
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
        if (isset($map['MnsQueue'])) {
            $model->mnsQueue = $map['MnsQueue'];
        }
        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['DelayStopTime'])) {
            $model->delayStopTime = $map['DelayStopTime'];
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['FileSplitInterval'])) {
            $model->fileSplitInterval = $map['FileSplitInterval'];
        }
        if (isset($map['HttpCallbackUrl'])) {
            $model->httpCallbackUrl = $map['HttpCallbackUrl'];
        }
        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = $map['Formats'];
            }
        }
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
        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n                 = 0;
                foreach ($map['Watermarks'] as $item) {
                    $model->watermarks[$n++] = null !== $item ? watermarks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }

        return $model;
    }
}
