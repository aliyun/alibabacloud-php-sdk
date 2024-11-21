<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponseBody\configuration\grayVersions;
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
     * @description The list of IP addresses where the beta release of the configuration is performed.
     *
     * @example 1.1.XX.XX,2.2.XX.XX
     *
     * @var string
     */
    public $betaIps;

    /**
     * @description The content of the configuration.
     *
     * @example log.level=error
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the configuration.
     *
     * @example log.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The description of the configuration.
     *
     * @example For testing
     *
     * @var string
     */
    public $desc;

    /**
     * @description The encryption key.
     *
     * @example key
     *
     * @var string
     */
    public $encryptedDataKey;

    /**
     * @var grayVersions[]
     */
    public $grayVersions;

    /**
     * @description The name of the configuration group.
     *
     * @example test
     *
     * @var string
     */
    public $group;

    /**
     * @description The message digest of the configuration.
     *
     * @example 123rfsdf3
     *
     * @var string
     */
    public $md5;

    /**
     * @description The tags of the configuration.
     *
     * @example context
     *
     * @var string
     */
    public $tags;

    /**
     * @description The format of the configuration.
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appName'          => 'AppName',
        'betaIps'          => 'BetaIps',
        'content'          => 'Content',
        'dataId'           => 'DataId',
        'desc'             => 'Desc',
        'encryptedDataKey' => 'EncryptedDataKey',
        'grayVersions'     => 'GrayVersions',
        'group'            => 'Group',
        'md5'              => 'Md5',
        'tags'             => 'Tags',
        'type'             => 'Type',
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
        if (null !== $this->betaIps) {
            $res['BetaIps'] = $this->betaIps;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->encryptedDataKey) {
            $res['EncryptedDataKey'] = $this->encryptedDataKey;
        }
        if (null !== $this->grayVersions) {
            $res['GrayVersions'] = [];
            if (null !== $this->grayVersions && \is_array($this->grayVersions)) {
                $n = 0;
                foreach ($this->grayVersions as $item) {
                    $res['GrayVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BetaIps'])) {
            $model->betaIps = $map['BetaIps'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['EncryptedDataKey'])) {
            $model->encryptedDataKey = $map['EncryptedDataKey'];
        }
        if (isset($map['GrayVersions'])) {
            if (!empty($map['GrayVersions'])) {
                $model->grayVersions = [];
                $n                   = 0;
                foreach ($map['GrayVersions'] as $item) {
                    $model->grayVersions[$n++] = null !== $item ? grayVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
