<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SaveMaterialDocumentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $author;
    /**
     * @var bool
     */
    public $bothSavePrivateAndShare;
    /**
     * @var string
     */
    public $docKeywordsShrink;
    /**
     * @var string
     */
    public $docType;
    /**
     * @var string
     */
    public $externalUrl;
    /**
     * @var string
     */
    public $htmlContent;
    /**
     * @var string
     */
    public $pubTime;
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
    public $title;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'agentKey'                => 'AgentKey',
        'author'                  => 'Author',
        'bothSavePrivateAndShare' => 'BothSavePrivateAndShare',
        'docKeywordsShrink'       => 'DocKeywords',
        'docType'                 => 'DocType',
        'externalUrl'             => 'ExternalUrl',
        'htmlContent'             => 'HtmlContent',
        'pubTime'                 => 'PubTime',
        'shareAttr'               => 'ShareAttr',
        'srcFrom'                 => 'SrcFrom',
        'summary'                 => 'Summary',
        'textContent'             => 'TextContent',
        'title'                   => 'Title',
        'url'                     => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }

        if (null !== $this->bothSavePrivateAndShare) {
            $res['BothSavePrivateAndShare'] = $this->bothSavePrivateAndShare;
        }

        if (null !== $this->docKeywordsShrink) {
            $res['DocKeywords'] = $this->docKeywordsShrink;
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

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
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

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }

        if (isset($map['BothSavePrivateAndShare'])) {
            $model->bothSavePrivateAndShare = $map['BothSavePrivateAndShare'];
        }

        if (isset($map['DocKeywords'])) {
            $model->docKeywordsShrink = $map['DocKeywords'];
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

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
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

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
