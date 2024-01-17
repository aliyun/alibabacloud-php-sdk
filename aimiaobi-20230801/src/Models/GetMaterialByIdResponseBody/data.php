<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @example 2023-03-21 11:34:19
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $createUser;

    /**
     * @var string[]
     */
    public $docKeywords;

    /**
     * @example pdf
     *
     * @var string
     */
    public $docType;

    /**
     * @example https://www.example.com
     *
     * @var string
     */
    public $externalUrl;

    /**
     * @var string
     */
    public $htmlContent;

    /**
     * @example 32
     *
     * @var int
     */
    public $id;

    /**
     * @example 2023-04-11 06:14:07
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example https://www.example.com
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
     * @example user_upload
     *
     * @var string
     */
    public $srcFrom;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $textContent;

    /**
     * @var string
     */
    public $thumbnailInBase64;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2022-04-08 19:33:01
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $updateUser;

    /**
     * @example https://www.example.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'author'            => 'Author',
        'createTime'        => 'CreateTime',
        'createUser'        => 'CreateUser',
        'docKeywords'       => 'DocKeywords',
        'docType'           => 'DocType',
        'externalUrl'       => 'ExternalUrl',
        'htmlContent'       => 'HtmlContent',
        'id'                => 'Id',
        'pubTime'           => 'PubTime',
        'publicUrl'         => 'PublicUrl',
        'shareAttr'         => 'ShareAttr',
        'srcFrom'           => 'SrcFrom',
        'summary'           => 'Summary',
        'textContent'       => 'TextContent',
        'thumbnailInBase64' => 'ThumbnailInBase64',
        'title'             => 'Title',
        'updateTime'        => 'UpdateTime',
        'updateUser'        => 'UpdateUser',
        'url'               => 'Url',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->docKeywords) {
            $res['DocKeywords'] = $this->docKeywords;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
