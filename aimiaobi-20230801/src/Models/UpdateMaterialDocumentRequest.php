<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class UpdateMaterialDocumentRequest extends Model
{
    /**
     * @example 67c520d1fa43455ea44fb69fa402d54d_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string[]
     */
    public $docKeywords;

    /**
     * @example image
     *
     * @var string
     */
    public $docType;

    /**
     * @example http://xxxxx/xxx
     *
     * @var string
     */
    public $externalUrl;

    /**
     * @var string
     */
    public $htmlContent;

    /**
     * @example 44
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
     * @example 1
     *
     * @var int
     */
    public $shareAttr;

    /**
     * @example UserUpload
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
    public $title;

    /**
     * @example http://xxxxx/xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'author'      => 'Author',
        'docKeywords' => 'DocKeywords',
        'docType'     => 'DocType',
        'externalUrl' => 'ExternalUrl',
        'htmlContent' => 'HtmlContent',
        'id'          => 'Id',
        'pubTime'     => 'PubTime',
        'shareAttr'   => 'ShareAttr',
        'srcFrom'     => 'SrcFrom',
        'summary'     => 'Summary',
        'textContent' => 'TextContent',
        'title'       => 'Title',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
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

    /**
     * @param array $map
     *
     * @return UpdateMaterialDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
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
