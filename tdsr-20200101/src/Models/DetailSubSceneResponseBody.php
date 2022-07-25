<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DetailSubSceneResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $cubemapPath;

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
    public $imageUrl;

    /**
     * @var string
     */
    public $layoutData;

    /**
     * @var string
     */
    public $message;

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
    public $position;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'code'        => 'Code',
        'coverUrl'    => 'CoverUrl',
        'cubemapPath' => 'CubemapPath',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'imageUrl'    => 'ImageUrl',
        'layoutData'  => 'LayoutData',
        'message'     => 'Message',
        'name'        => 'Name',
        'originUrl'   => 'OriginUrl',
        'position'    => 'Position',
        'requestId'   => 'RequestId',
        'resourceId'  => 'ResourceId',
        'status'      => 'Status',
        'success'     => 'Success',
        'type'        => 'Type',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->cubemapPath) {
            $res['CubemapPath'] = $this->cubemapPath;
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
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->layoutData) {
            $res['LayoutData'] = $this->layoutData;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->originUrl) {
            $res['OriginUrl'] = $this->originUrl;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
     * @return DetailSubSceneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CubemapPath'])) {
            $model->cubemapPath = $map['CubemapPath'];
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LayoutData'])) {
            $model->layoutData = $map['LayoutData'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OriginUrl'])) {
            $model->originUrl = $map['OriginUrl'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
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
