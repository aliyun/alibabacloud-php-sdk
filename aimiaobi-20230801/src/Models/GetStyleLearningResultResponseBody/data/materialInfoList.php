<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class materialInfoList extends Model
{
    /**
     * @example 作者
     *
     * @var string
     */
    public $author;

    /**
     * @example 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 创建用户ID
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 创建用户姓名
     *
     * @var string
     */
    public $createUserName;

    /**
     * @var string[]
     */
    public $docKeywords;

    /**
     * @example 文档类型，pdf、word、url、image
     *
     * @var string
     */
    public $docType;

    /**
     * @example 外部客户上传的URL，仅用作记录保存
     *
     * @var string
     */
    public $externalUrl;

    /**
     * @example 41
     *
     * @var int
     */
    public $fileLength;

    /**
     * @example 解析后的原始html内容
     *
     * @var string
     */
    public $htmlContent;

    /**
     * @example 50
     *
     * @var int
     */
    public $id;

    /**
     * @example 发布时间
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 临时的对外公开的URL
     *
     * @var string
     */
    public $publicUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $shareAttr;

    /**
     * @example 文档来源，user_upload、search、viewpoint
     *
     * @var string
     */
    public $srcFrom;

    /**
     * @example 文档摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 解析后的文本内容，对于图片来说为空
     *
     * @var string
     */
    public $textContent;

    /**
     * @example 图片文档类型的Base64缩略图
     *
     * @var string
     */
    public $thumbnailInBase64;

    /**
     * @example 文档标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 修改时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 修改用户ID
     *
     * @var string
     */
    public $updateUser;

    /**
     * @example 修改用户姓名
     *
     * @var string
     */
    public $updateUserName;

    /**
     * @example 内部文档保存的URL，支持多协议，http://,file://,ftp://:客户上传时保存到内部存储的URL、长期保存、到期删除
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'author' => 'Author',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'createUserName' => 'CreateUserName',
        'docKeywords' => 'DocKeywords',
        'docType' => 'DocType',
        'externalUrl' => 'ExternalUrl',
        'fileLength' => 'FileLength',
        'htmlContent' => 'HtmlContent',
        'id' => 'Id',
        'pubTime' => 'PubTime',
        'publicUrl' => 'PublicUrl',
        'shareAttr' => 'ShareAttr',
        'srcFrom' => 'SrcFrom',
        'summary' => 'Summary',
        'textContent' => 'TextContent',
        'thumbnailInBase64' => 'ThumbnailInBase64',
        'title' => 'Title',
        'updateTime' => 'UpdateTime',
        'updateUser' => 'UpdateUser',
        'updateUserName' => 'UpdateUserName',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->docKeywords) {
            $res['DocKeywords'] = $this->docKeywords;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
        }
        if (null !== $this->fileLength) {
            $res['FileLength'] = $this->fileLength;
        }
        if (null !== $this->htmlContent) {
            $res['HtmlContent'] = $this->htmlContent;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }
        if (null !== $this->shareAttr) {
            $res['ShareAttr'] = $this->shareAttr;
        }
        if (null !== $this->srcFrom) {
            $res['SrcFrom'] = $this->srcFrom;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->textContent) {
            $res['TextContent'] = $this->textContent;
        }
        if (null !== $this->thumbnailInBase64) {
            $res['ThumbnailInBase64'] = $this->thumbnailInBase64;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }
        if (null !== $this->updateUserName) {
            $res['UpdateUserName'] = $this->updateUserName;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return materialInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['DocKeywords'])) {
            if (!empty($map['DocKeywords'])) {
                $model->docKeywords = $map['DocKeywords'];
            }
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['ExternalUrl'])) {
            $model->externalUrl = $map['ExternalUrl'];
        }
        if (isset($map['FileLength'])) {
            $model->fileLength = $map['FileLength'];
        }
        if (isset($map['HtmlContent'])) {
            $model->htmlContent = $map['HtmlContent'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }
        if (isset($map['ShareAttr'])) {
            $model->shareAttr = $map['ShareAttr'];
        }
        if (isset($map['SrcFrom'])) {
            $model->srcFrom = $map['SrcFrom'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TextContent'])) {
            $model->textContent = $map['TextContent'];
        }
        if (isset($map['ThumbnailInBase64'])) {
            $model->thumbnailInBase64 = $map['ThumbnailInBase64'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }
        if (isset($map['UpdateUserName'])) {
            $model->updateUserName = $map['UpdateUserName'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
