<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest\watermarks;
use AlibabaCloud\Tea\Model;

class UpdateRecordTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $appId;

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

    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var int
     */
    public $backgroundColor;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @var string
     */
    public $mnsQueue;

    /**
     * @var string
     */
    public $httpCallbackUrl;

    /**
     * @var int
     */
    public $fileSplitInterval;

    /**
     * @var int
     */
    public $delayStopTime;

    /**
     * @var int[]
     */
    public $layoutIds;

    /**
     * @var string[]
     */
    public $formats;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var watermarks[]
     */
    public $watermarks;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'showLog'           => 'ShowLog',
        'appId'             => 'AppId',
        'name'              => 'Name',
        'templateId'        => 'TemplateId',
        'taskProfile'       => 'TaskProfile',
        'mediaEncode'       => 'MediaEncode',
        'backgroundColor'   => 'BackgroundColor',
        'ossBucket'         => 'OssBucket',
        'ossFilePrefix'     => 'OssFilePrefix',
        'mnsQueue'          => 'MnsQueue',
        'httpCallbackUrl'   => 'HttpCallbackUrl',
        'fileSplitInterval' => 'FileSplitInterval',
        'delayStopTime'     => 'DelayStopTime',
        'layoutIds'         => 'LayoutIds',
        'formats'           => 'Formats',
        'backgrounds'       => 'Backgrounds',
        'watermarks'        => 'Watermarks',
        'clockWidgets'      => 'ClockWidgets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
        }
        if (null !== $this->mnsQueue) {
            $res['MnsQueue'] = $this->mnsQueue;
        }
        if (null !== $this->httpCallbackUrl) {
            $res['HttpCallbackUrl'] = $this->httpCallbackUrl;
        }
        if (null !== $this->fileSplitInterval) {
            $res['FileSplitInterval'] = $this->fileSplitInterval;
        }
        if (null !== $this->delayStopTime) {
            $res['DelayStopTime'] = $this->delayStopTime;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
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
        if (null !== $this->clockWidgets) {
            $res['ClockWidgets'] = [];
            if (null !== $this->clockWidgets && \is_array($this->clockWidgets)) {
                $n = 0;
                foreach ($this->clockWidgets as $item) {
                    $res['ClockWidgets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRecordTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
        }
        if (isset($map['MnsQueue'])) {
            $model->mnsQueue = $map['MnsQueue'];
        }
        if (isset($map['HttpCallbackUrl'])) {
            $model->httpCallbackUrl = $map['HttpCallbackUrl'];
        }
        if (isset($map['FileSplitInterval'])) {
            $model->fileSplitInterval = $map['FileSplitInterval'];
        }
        if (isset($map['DelayStopTime'])) {
            $model->delayStopTime = $map['DelayStopTime'];
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = $map['Formats'];
            }
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
        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n                   = 0;
                foreach ($map['ClockWidgets'] as $item) {
                    $model->clockWidgets[$n++] = null !== $item ? clockWidgets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
