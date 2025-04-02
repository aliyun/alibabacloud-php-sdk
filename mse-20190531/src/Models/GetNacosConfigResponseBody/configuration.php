<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponseBody\configuration\grayVersions;

class configuration extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $betaIps;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $encryptedDataKey;

    /**
     * @var grayVersions[]
     */
    public $grayVersions;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appName' => 'AppName',
        'betaIps' => 'BetaIps',
        'content' => 'Content',
        'dataId' => 'DataId',
        'desc' => 'Desc',
        'encryptedDataKey' => 'EncryptedDataKey',
        'grayVersions' => 'GrayVersions',
        'group' => 'Group',
        'md5' => 'Md5',
        'tags' => 'Tags',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->grayVersions)) {
            Model::validateArray($this->grayVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->grayVersions)) {
                $res['GrayVersions'] = [];
                $n1 = 0;
                foreach ($this->grayVersions as $item1) {
                    $res['GrayVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['GrayVersions'] as $item1) {
                    $model->grayVersions[$n1++] = grayVersions::fromMap($item1);
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
