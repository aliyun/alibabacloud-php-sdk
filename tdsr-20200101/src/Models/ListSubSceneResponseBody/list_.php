<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $baseImageUrl;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $cubemapPath;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $layoutData;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $originUrl;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'baseImageUrl' => 'BaseImageUrl',
        'coverUrl'     => 'CoverUrl',
        'cubemapPath'  => 'CubemapPath',
        'deleted'      => 'Deleted',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'layoutData'   => 'LayoutData',
        'name'         => 'Name',
        'originUrl'    => 'OriginUrl',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
        'status'       => 'Status',
        'type'         => 'Type',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseImageUrl) {
            $res['BaseImageUrl'] = $this->baseImageUrl;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->cubemapPath) {
            $res['CubemapPath'] = $this->cubemapPath;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->layoutData) {
            $res['LayoutData'] = $this->layoutData;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->originUrl) {
            $res['OriginUrl'] = $this->originUrl;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseImageUrl'])) {
            $model->baseImageUrl = $map['BaseImageUrl'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CubemapPath'])) {
            $model->cubemapPath = $map['CubemapPath'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LayoutData'])) {
            $model->layoutData = $map['LayoutData'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OriginUrl'])) {
            $model->originUrl = $map['OriginUrl'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
