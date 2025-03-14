<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateScreenshotRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances. You can create multiple snapshots simultaneously.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @description The name of the OSS bucket. The name must start with "cloudphone-saved-bucket-". The OSS bucket and the cloud phone instance must be in the same region. If you leave this parameter empty, the system will create a default OSS bucket named “cloudphone-saved-bucket-{Region of the cloud phone instance}-{AliUid}.”
     *
     * @example cloudphone-saved-bucket-cn-shanghai-default
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @description Specifies whether to bypass the snapshot policy control. Default value: false.
     *
     * @example false
     *
     * @var string
     */
    public $skipCheckPolicyConfig;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'ossBucketName' => 'OssBucketName',
        'skipCheckPolicyConfig' => 'SkipCheckPolicyConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            $res['AndroidInstanceIdList'] = $this->androidInstanceIdList;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->skipCheckPolicyConfig) {
            $res['SkipCheckPolicyConfig'] = $this->skipCheckPolicyConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScreenshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = $map['AndroidInstanceIdList'];
            }
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['SkipCheckPolicyConfig'])) {
            $model->skipCheckPolicyConfig = $map['SkipCheckPolicyConfig'];
        }

        return $model;
    }
}
