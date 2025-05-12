<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class materialInfoList extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string[]
     */
    public $docKeywords;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $externalUrl;

    /**
     * @var int
     */
    public $fileLength;

    /**
     * @var string
     */
    public $htmlContent;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $publicUrl;

    /**
     * @var int
     */
    public $shareAttr;

    /**
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
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updateUser;

    /**
     * @var string
     */
    public $updateUserName;

    /**
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

    public function validate()
    {
        if (\is_array($this->docKeywords)) {
            Model::validateArray($this->docKeywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->docKeywords)) {
                $res['DocKeywords'] = [];
                $n1 = 0;
                foreach ($this->docKeywords as $item1) {
                    $res['DocKeywords'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->docKeywords = [];
                $n1 = 0;
                foreach ($map['DocKeywords'] as $item1) {
                    $model->docKeywords[$n1++] = $item1;
                }
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
