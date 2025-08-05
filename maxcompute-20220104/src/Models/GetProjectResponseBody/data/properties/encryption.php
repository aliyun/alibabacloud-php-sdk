<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\Tea\Model;

class encryption extends Model
{
    /**
     * @description The data encryption algorithm that is supported by the key. Valid values: AES256, AESCTR, and RC4.
     *
     * @example SHA1
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description Indicates whether the data encryption feature needs to be enabled for the project. For more information about data encryption, see
     *
     * [Storage encryption](https://www.alibabacloud.com/help/zh/maxcompute/security-and-compliance/storage-encryption).
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The type of key that is used for data encryption. You can select MaxCompute Default Key or Bring Your Own Key (BYOK) as the key type. If you select MaxCompute Default Key, the default key that is created by MaxCompute is used.
     *
     * @example dafault
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'algorithm' => 'algorithm',
        'enable' => 'enable',
        'key' => 'key',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
