<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\materialInfo;

use AlibabaCloud\Tea\Model;

class suit extends Model
{
    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var bool
     */
    public $common;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $listStatus;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkStatus'  => 'CheckStatus',
        'common'       => 'Common',
        'coverUrl'     => 'CoverUrl',
        'createTime'   => 'CreateTime',
        'deleted'      => 'Deleted',
        'ext'          => 'Ext',
        'fileUrl'      => 'FileUrl',
        'id'           => 'Id',
        'intro'        => 'Intro',
        'listStatus'   => 'ListStatus',
        'modifiedTime' => 'ModifiedTime',
        'name'         => 'Name',
        'ossKey'       => 'OssKey',
        'previewUrl'   => 'PreviewUrl',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->listStatus) {
            $res['ListStatus'] = $this->listStatus;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['ListStatus'])) {
            $model->listStatus = $map['ListStatus'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
