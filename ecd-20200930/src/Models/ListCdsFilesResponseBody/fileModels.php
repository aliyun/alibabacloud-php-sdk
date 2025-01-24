<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListCdsFilesResponseBody;

use AlibabaCloud\Dara\Model;

class fileModels extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $contentType;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $downloadUrl;
    /**
     * @var string
     */
    public $fileExtension;
    /**
     * @var string
     */
    public $fileId;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var string
     */
    public $fileType;
    /**
     * @var string
     */
    public $md5;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $modifier;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $openTime;
    /**
     * @var int
     */
    public $openTimeStamp;
    /**
     * @var string
     */
    public $parentId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $sha1;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $thumbnail;
    protected $_name = [
        'category'      => 'Category',
        'contentType'   => 'ContentType',
        'createTime'    => 'CreateTime',
        'creator'       => 'Creator',
        'description'   => 'Description',
        'downloadUrl'   => 'DownloadUrl',
        'fileExtension' => 'FileExtension',
        'fileId'        => 'FileId',
        'filePath'      => 'FilePath',
        'fileType'      => 'FileType',
        'md5'           => 'Md5',
        'modifiedTime'  => 'ModifiedTime',
        'modifier'      => 'Modifier',
        'name'          => 'Name',
        'openTime'      => 'OpenTime',
        'openTimeStamp' => 'OpenTimeStamp',
        'parentId'      => 'ParentId',
        'regionId'      => 'RegionId',
        'sha1'          => 'Sha1',
        'size'          => 'Size',
        'thumbnail'     => 'Thumbnail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileExtension) {
            $res['FileExtension'] = $this->fileExtension;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }

        if (null !== $this->openTimeStamp) {
            $res['OpenTimeStamp'] = $this->openTimeStamp;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sha1) {
            $res['Sha1'] = $this->sha1;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileExtension'])) {
            $model->fileExtension = $map['FileExtension'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        if (isset($map['OpenTimeStamp'])) {
            $model->openTimeStamp = $map['OpenTimeStamp'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Sha1'])) {
            $model->sha1 = $map['Sha1'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }

        return $model;
    }
}
