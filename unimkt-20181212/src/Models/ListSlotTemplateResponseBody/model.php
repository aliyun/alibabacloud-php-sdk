<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\ListSlotTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $accessWay;

    /**
     * @var string
     */
    public $secondScene;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $mediaStatus;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $keyWords;

    /**
     * @var string
     */
    public $accessStatus;

    /**
     * @var string
     */
    public $firstScene;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'accessWay'    => 'AccessWay',
        'secondScene'  => 'SecondScene',
        'createTime'   => 'CreateTime',
        'os'           => 'Os',
        'mediaName'    => 'MediaName',
        'mediaType'    => 'MediaType',
        'config'       => 'Config',
        'mediaId'      => 'MediaId',
        'extInfo'      => 'ExtInfo',
        'mediaStatus'  => 'MediaStatus',
        'version'      => 'Version',
        'keyWords'     => 'KeyWords',
        'accessStatus' => 'AccessStatus',
        'firstScene'   => 'FirstScene',
        'modifyTime'   => 'ModifyTime',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessWay) {
            $res['AccessWay'] = $this->accessWay;
        }
        if (null !== $this->secondScene) {
            $res['SecondScene'] = $this->secondScene;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->mediaStatus) {
            $res['MediaStatus'] = $this->mediaStatus;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->accessStatus) {
            $res['AccessStatus'] = $this->accessStatus;
        }
        if (null !== $this->firstScene) {
            $res['FirstScene'] = $this->firstScene;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessWay'])) {
            $model->accessWay = $map['AccessWay'];
        }
        if (isset($map['SecondScene'])) {
            $model->secondScene = $map['SecondScene'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['MediaStatus'])) {
            $model->mediaStatus = $map['MediaStatus'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['KeyWords'])) {
            $model->keyWords = $map['KeyWords'];
        }
        if (isset($map['AccessStatus'])) {
            $model->accessStatus = $map['AccessStatus'];
        }
        if (isset($map['FirstScene'])) {
            $model->firstScene = $map['FirstScene'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
