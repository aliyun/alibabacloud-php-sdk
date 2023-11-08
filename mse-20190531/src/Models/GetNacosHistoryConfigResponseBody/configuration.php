<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigResponseBody;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @description The name of the application.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The content of the configuration.
     *
     * @example test
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the configuration.
     *
     * @example test.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The encryption key.
     *
     * @example 23fds****
     *
     * @var string
     */
    public $encryptedDataKey;

    /**
     * @description The name of the configuration group.
     *
     * @example public
     *
     * @var string
     */
    public $group;

    /**
     * @description The MD5 value of the configuration.
     *
     * @example 23sdf32f****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The configuration type.
     *
     * @example text
     *
     * @var string
     */
    public $opType;
    protected $_name = [
        'appName'          => 'AppName',
        'content'          => 'Content',
        'dataId'           => 'DataId',
        'encryptedDataKey' => 'EncryptedDataKey',
        'group'            => 'Group',
        'md5'              => 'Md5',
        'opType'           => 'OpType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->encryptedDataKey) {
            $res['EncryptedDataKey'] = $this->encryptedDataKey;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['EncryptedDataKey'])) {
            $model->encryptedDataKey = $map['EncryptedDataKey'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        return $model;
    }
}
