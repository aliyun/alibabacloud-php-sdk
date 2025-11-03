<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateScreenshotRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $screenshotId;

    /**
     * @var string
     */
    public $skipCheckPolicyConfig;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'ossBucketName' => 'OssBucketName',
        'screenshotId' => 'ScreenshotId',
        'skipCheckPolicyConfig' => 'SkipCheckPolicyConfig',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIdList)) {
            Model::validateArray($this->androidInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            if (\is_array($this->androidInstanceIdList)) {
                $res['AndroidInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceIdList as $item1) {
                    $res['AndroidInstanceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->screenshotId) {
            $res['ScreenshotId'] = $this->screenshotId;
        }

        if (null !== $this->skipCheckPolicyConfig) {
            $res['SkipCheckPolicyConfig'] = $this->skipCheckPolicyConfig;
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
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceIdList'] as $item1) {
                    $model->androidInstanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['ScreenshotId'])) {
            $model->screenshotId = $map['ScreenshotId'];
        }

        if (isset($map['SkipCheckPolicyConfig'])) {
            $model->skipCheckPolicyConfig = $map['SkipCheckPolicyConfig'];
        }

        return $model;
    }
}
