<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsForSwimmingLaneResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0099b7be-5f5b-4512-a7fc-56049ef1****
     *
     * @var string
     */
    public $appId;

    /**
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 8c573618-8d72-4407-baf4-f7b64b******
     *
     * @var string
     */
    public $baseAppId;

    /**
     * @example demo
     *
     * @var string
     */
    public $baseAppName;

    /**
     * @example mse-cn-hvm47******
     *
     * @var string
     */
    public $mseAppId;

    /**
     * @example test
     *
     * @var string
     */
    public $mseAppName;

    /**
     * @example sae-test
     *
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

    public function validate() {}

    public function toMap()
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
            $res['ServiceTags'] = $this->serviceTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
            $model->serviceTags = $map['ServiceTags'];
        }

        return $model;
    }
}
