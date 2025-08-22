<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppRequest\tag;

class CreateRumAppRequest extends Model
{
    /**
     * @var string
     */
    public $appGroup;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $realRegionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $siteType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'appGroup' => 'AppGroup',
        'appName' => 'AppName',
        'description' => 'Description',
        'language' => 'Language',
        'nickName' => 'NickName',
        'packageName' => 'PackageName',
        'realRegionId' => 'RealRegionId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'siteType' => 'SiteType',
        'source' => 'Source',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->realRegionId) {
            $res['RealRegionId'] = $this->realRegionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->siteType) {
            $res['SiteType'] = $this->siteType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['RealRegionId'])) {
            $model->realRegionId = $map['RealRegionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SiteType'])) {
            $model->siteType = $map['SiteType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
