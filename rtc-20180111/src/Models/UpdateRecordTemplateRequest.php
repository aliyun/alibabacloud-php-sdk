<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest\watermarks;

class UpdateRecordTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
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
     * @var int
     */
    public $delayStopTime;
    /**
     * @var bool
     */
    public $enableM3u8DateTime;
    /**
     * @var int
     */
    public $fileSplitInterval;
    /**
     * @var string[]
     */
    public $formats;
    /**
     * @var string
     */
    public $httpCallbackUrl;
    /**
     * @var int[]
     */
    public $layoutIds;
    /**
     * @var int
     */
    public $mediaEncode;
    /**
     * @var string
     */
    public $mnsQueue;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ossBucket;
    /**
     * @var string
     */
    public $ossEndpoint;
    /**
     * @var string
     */
    public $ossFilePrefix;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $taskProfile;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'appId'              => 'AppId',
        'backgroundColor'    => 'BackgroundColor',
        'backgrounds'        => 'Backgrounds',
        'clockWidgets'       => 'ClockWidgets',
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
        'ossEndpoint'        => 'OssEndpoint',
        'ossFilePrefix'      => 'OssFilePrefix',
        'ownerId'            => 'OwnerId',
        'taskProfile'        => 'TaskProfile',
        'templateId'         => 'TemplateId',
        'watermarks'         => 'Watermarks',
    ];

    public function validate()
    {
        if (\is_array($this->backgrounds)) {
            Model::validateArray($this->backgrounds);
        }
        if (\is_array($this->clockWidgets)) {
            Model::validateArray($this->clockWidgets);
        }
        if (\is_array($this->formats)) {
            Model::validateArray($this->formats);
        }
        if (\is_array($this->layoutIds)) {
            Model::validateArray($this->layoutIds);
        }
        if (\is_array($this->watermarks)) {
            Model::validateArray($this->watermarks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }

        if (null !== $this->backgrounds) {
            if (\is_array($this->backgrounds)) {
                $res['Backgrounds'] = [];
                $n1                 = 0;
                foreach ($this->backgrounds as $item1) {
                    $res['Backgrounds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clockWidgets) {
            if (\is_array($this->clockWidgets)) {
                $res['ClockWidgets'] = [];
                $n1                  = 0;
                foreach ($this->clockWidgets as $item1) {
                    $res['ClockWidgets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (\is_array($this->formats)) {
                $res['Formats'] = [];
                $n1             = 0;
                foreach ($this->formats as $item1) {
                    $res['Formats'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->httpCallbackUrl) {
            $res['HttpCallbackUrl'] = $this->httpCallbackUrl;
        }

        if (null !== $this->layoutIds) {
            if (\is_array($this->layoutIds)) {
                $res['LayoutIds'] = [];
                $n1               = 0;
                foreach ($this->layoutIds as $item1) {
                    $res['LayoutIds'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->watermarks) {
            if (\is_array($this->watermarks)) {
                $res['Watermarks'] = [];
                $n1                = 0;
                foreach ($this->watermarks as $item1) {
                    $res['Watermarks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }

        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n1                 = 0;
                foreach ($map['Backgrounds'] as $item1) {
                    $model->backgrounds[$n1++] = backgrounds::fromMap($item1);
                }
            }
        }

        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n1                  = 0;
                foreach ($map['ClockWidgets'] as $item1) {
                    $model->clockWidgets[$n1++] = clockWidgets::fromMap($item1);
                }
            }
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
                $model->formats = [];
                $n1             = 0;
                foreach ($map['Formats'] as $item1) {
                    $model->formats[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HttpCallbackUrl'])) {
            $model->httpCallbackUrl = $map['HttpCallbackUrl'];
        }

        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = [];
                $n1               = 0;
                foreach ($map['LayoutIds'] as $item1) {
                    $model->layoutIds[$n1++] = $item1;
                }
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

        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
                $n1                = 0;
                foreach ($map['Watermarks'] as $item1) {
                    $model->watermarks[$n1++] = watermarks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
