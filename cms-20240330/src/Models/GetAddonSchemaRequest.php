<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetAddonSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $environmentType;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'aliyunLang' => 'aliyunLang',
        'apiVersion' => 'apiVersion',
        'environmentType' => 'environmentType',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['aliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->environmentType) {
            $res['environmentType'] = $this->environmentType;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['aliyunLang'])) {
            $model->aliyunLang = $map['aliyunLang'];
        }

        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['environmentType'])) {
            $model->environmentType = $map['environmentType'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
