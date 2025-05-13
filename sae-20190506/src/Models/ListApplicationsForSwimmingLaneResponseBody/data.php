<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsForSwimmingLaneResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
    public $baseAppId;

    /**
     * @var string
     */
    public $baseAppName;

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

    /**
     * @var string[]
     */
    public $serviceTags;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'baseAppId' => 'BaseAppId',
        'baseAppName' => 'BaseAppName',
        'mseAppId' => 'MseAppId',
        'mseAppName' => 'MseAppName',
        'mseNamespaceId' => 'MseNamespaceId',
        'serviceTags' => 'ServiceTags',
    ];

    public function validate()
    {
        if (\is_array($this->serviceTags)) {
            Model::validateArray($this->serviceTags);
        }
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

        if (null !== $this->baseAppId) {
            $res['BaseAppId'] = $this->baseAppId;
        }

        if (null !== $this->baseAppName) {
            $res['BaseAppName'] = $this->baseAppName;
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

        if (null !== $this->serviceTags) {
            if (\is_array($this->serviceTags)) {
                $res['ServiceTags'] = [];
                foreach ($this->serviceTags as $key1 => $value1) {
                    $res['ServiceTags'][$key1] = $value1;
                }
            }
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

        if (isset($map['BaseAppId'])) {
            $model->baseAppId = $map['BaseAppId'];
        }

        if (isset($map['BaseAppName'])) {
            $model->baseAppName = $map['BaseAppName'];
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

        if (isset($map['ServiceTags'])) {
            if (!empty($map['ServiceTags'])) {
                $model->serviceTags = [];
                foreach ($map['ServiceTags'] as $key1 => $value1) {
                    $model->serviceTags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
