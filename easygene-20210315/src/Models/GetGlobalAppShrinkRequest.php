<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetGlobalAppShrinkRequest extends Model
{
    /**
     * @example joint-calling
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example AppVersion, AppDescriptorFiles, DescriptorType, DAG, Document, Comment, Alias, NamespaceName, AppScope, AppName, AppDescription, RegionIds, Categories, Toolkit, AppVersions, AppDefaultVersion, AppFee, LastModified, Pinned, Contact, Links, AppType
     *
     * @var string
     */
    public $attributesShrink;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $location;

    /**
     * @example sentieon
     *
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'appName'          => 'AppName',
        'appVersion'       => 'AppVersion',
        'attributesShrink' => 'Attributes',
        'location'         => 'Location',
        'namespaceName'    => 'NamespaceName',
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
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->attributesShrink) {
            $res['Attributes'] = $this->attributesShrink;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGlobalAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Attributes'])) {
            $model->attributesShrink = $map['Attributes'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
