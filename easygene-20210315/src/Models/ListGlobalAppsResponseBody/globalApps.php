<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListGlobalAppsResponseBody;

use AlibabaCloud\Tea\Model;

class globalApps extends Model
{
    /**
     * @example 1.0
     *
     * @var string
     */
    public $appDefaultVersion;

    /**
     * @example This is app description.
     *
     * @var string
     */
    public $appDescription;

    /**
     * @example 实际使用时，计算该应用消耗的资源费用。
     *
     * @var string
     */
    public $appFee;

    /**
     * @example joint-calling
     *
     * @var string
     */
    public $appName;

    /**
     * @example OpenAccess
     *
     * @var string
     */
    public $appScope;

    /**
     * @var string[]
     */
    public $categories;

    /**
     * @example yyyy/MM/dd HH:mm:ss
     *
     * @var string
     */
    public $lastModified;

    /**
     * @var string[]
     */
    public $locations;

    /**
     * @example sentieon
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $pinned;

    /**
     * @example Sentieon
     *
     * @var string
     */
    public $toolkit;
    protected $_name = [
        'appDefaultVersion' => 'AppDefaultVersion',
        'appDescription'    => 'AppDescription',
        'appFee'            => 'AppFee',
        'appName'           => 'AppName',
        'appScope'          => 'AppScope',
        'categories'        => 'Categories',
        'lastModified'      => 'LastModified',
        'locations'         => 'Locations',
        'namespaceName'     => 'NamespaceName',
        'pinned'            => 'Pinned',
        'toolkit'           => 'Toolkit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDefaultVersion) {
            $res['AppDefaultVersion'] = $this->appDefaultVersion;
        }
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }
        if (null !== $this->appFee) {
            $res['AppFee'] = $this->appFee;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appScope) {
            $res['AppScope'] = $this->appScope;
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->locations) {
            $res['Locations'] = $this->locations;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->pinned) {
            $res['Pinned'] = $this->pinned;
        }
        if (null !== $this->toolkit) {
            $res['Toolkit'] = $this->toolkit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDefaultVersion'])) {
            $model->appDefaultVersion = $map['AppDefaultVersion'];
        }
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }
        if (isset($map['AppFee'])) {
            $model->appFee = $map['AppFee'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppScope'])) {
            $model->appScope = $map['AppScope'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Locations'])) {
            if (!empty($map['Locations'])) {
                $model->locations = $map['Locations'];
            }
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['Pinned'])) {
            $model->pinned = $map['Pinned'];
        }
        if (isset($map['Toolkit'])) {
            $model->toolkit = $map['Toolkit'];
        }

        return $model;
    }
}
