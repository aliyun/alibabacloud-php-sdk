<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest\packageConfig;

use AlibabaCloud\Tea\Model;

class drmProvider extends Model
{
    /**
     * @description The encryption method. Valid values:
     *
     *   AES_128: Advanced Encryption Standard (AES) with 128-bit key length.
     *   SAMPLE_AES: an encryption method that encrypts individual media samples.
     *
     * @example AES_128
     *
     * @var string
     */
    public $encryptionMethod;

    /**
     * @description A 128-bit, 16-byte hex value represented by a 32-character string that is used with the key for encrypting data blocks. If you leave this parameter empty, MediaPackage creates a constant initialization vector (IV). If it is specified, the value is passed to the DRM service.
     *
     * @example 00001111222233334444555566667777
     *
     * @var string
     */
    public $IV;

    /**
     * @description The ID of the DRM system. The maximum number of system IDs allowed is determined by the protocol type. Limits:
     *
     *   DASH: 2
     *   HLS: 1
     *   HLS_CMAF: 2
     *
     * Apple FairPlay, Google Widevine, and Microsoft PlayReady are supported. Their system IDs are as follows:
     *
     *   Apple FairPlay: 94ce86fb-07ff-4f43-adb8-93d2fa968ca2
     *   Google Widevine: edef8ba9-79d6-4ace-a3c8-27dcd51d21e
     *   Microsoft PlayReady: 9a04f079-9840-4286-ab92-e65be0885f95
     *
     * @var string[]
     */
    public $systemIds;

    /**
     * @description The URL of the DRM key provider.
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'encryptionMethod' => 'EncryptionMethod',
        'IV' => 'IV',
        'systemIds' => 'SystemIds',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptionMethod) {
            $res['EncryptionMethod'] = $this->encryptionMethod;
        }
        if (null !== $this->IV) {
            $res['IV'] = $this->IV;
        }
        if (null !== $this->systemIds) {
            $res['SystemIds'] = $this->systemIds;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drmProvider
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptionMethod'])) {
            $model->encryptionMethod = $map['EncryptionMethod'];
        }
        if (isset($map['IV'])) {
            $model->IV = $map['IV'];
        }
        if (isset($map['SystemIds'])) {
            if (!empty($map['SystemIds'])) {
                $model->systemIds = $map['SystemIds'];
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
