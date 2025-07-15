<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveStreamTranscodeRequest extends Model
{
    /**
     * @description The name of the application to which the stream belongs, and it cannot be modified.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description Streamer domain name, not modifiable.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The encryption configuration. The value is a JSON string. The following fields are included in the syntax:
     *
     *   EncryptType: the type of the encryption. Set the value to **aliyun**.
     *   KmsKeyID: the ID of the CMK in KMS.
     *   KmsKeyExpireInterval: the validity period of the CMK. Valid values: **60 to 3600**. Unit: seconds.
     *
     * @example {"EncryptType": "aliyun", "KmsKeyID":"afce5722-81d2-43c3-9930-7601da11****","KmsKeyExpireInterval":"3600"}
     *
     * @var string
     */
    public $encryptParameters;

    /**
     * @description Specifies whether to enable triggered transcoding. Valid values:
     *
     *   **yes**: enables triggered transcoding.
     *   **no**: disables triggered transcoding.
     *
     * @example yes
     *
     * @var string
     */
    public $lazy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Transcoding template, not modifiable.
     *
     * This parameter is required.
     *
     * @example lsd
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'app' => 'App',
        'domain' => 'Domain',
        'encryptParameters' => 'EncryptParameters',
        'lazy' => 'Lazy',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'template' => 'Template',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = $this->encryptParameters;
        }
        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveStreamTranscodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = $map['EncryptParameters'];
        }
        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
