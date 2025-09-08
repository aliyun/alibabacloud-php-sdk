<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data;

use AlibabaCloud\Dara\Model;

class apps extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $mseAppId;

    /**
     * @var string
     */
    public $mseAppName;

    /**
     * @var string
     */
    public $mseNamespaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'mseAppId' => 'MseAppId',
        'mseAppName' => 'MseAppName',
        'mseNamespaceId' => 'MseNamespaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->mseAppId) {
            $res['MseAppId'] = $this->mseAppId;
        }

        if (null !== $this->mseAppName) {
            $res['MseAppName'] = $this->mseAppName;
        }

        if (null !== $this->mseNamespaceId) {
            $res['MseNamespaceId'] = $this->mseNamespaceId;
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

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['MseAppId'])) {
            $model->mseAppId = $map['MseAppId'];
        }

        if (isset($map['MseAppName'])) {
            $model->mseAppName = $map['MseAppName'];
        }

        if (isset($map['MseNamespaceId'])) {
            $model->mseNamespaceId = $map['MseNamespaceId'];
        }

        return $model;
    }
}
