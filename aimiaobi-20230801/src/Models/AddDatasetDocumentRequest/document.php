<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentRequest\document\multimodalMedias;

class document extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $disableHandleMultimodalMedia;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $docUuid;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var string
     */
    public $multimodalIndexName;

    /**
     * @var multimodalMedias[]
     */
    public $multimodalMedias;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $sourceFrom;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'disableHandleMultimodalMedia' => 'DisableHandleMultimodalMedia',
        'docId' => 'DocId',
        'docType' => 'DocType',
        'docUuid' => 'DocUuid',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'multimodalIndexName' => 'MultimodalIndexName',
        'multimodalMedias' => 'MultimodalMedias',
        'pubTime' => 'PubTime',
        'sourceFrom' => 'SourceFrom',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->multimodalMedias)) {
            Model::validateArray($this->multimodalMedias);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->disableHandleMultimodalMedia) {
            $res['DisableHandleMultimodalMedia'] = $this->disableHandleMultimodalMedia;
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }

        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }

        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }

        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }

        if (null !== $this->multimodalIndexName) {
            $res['MultimodalIndexName'] = $this->multimodalIndexName;
        }

        if (null !== $this->multimodalMedias) {
            if (\is_array($this->multimodalMedias)) {
                $res['MultimodalMedias'] = [];
                $n1 = 0;
                foreach ($this->multimodalMedias as $item1) {
                    $res['MultimodalMedias'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }

        if (null !== $this->sourceFrom) {
            $res['SourceFrom'] = $this->sourceFrom;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DisableHandleMultimodalMedia'])) {
            $model->disableHandleMultimodalMedia = $map['DisableHandleMultimodalMedia'];
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }

        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }

        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }

        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }

        if (isset($map['MultimodalIndexName'])) {
            $model->multimodalIndexName = $map['MultimodalIndexName'];
        }

        if (isset($map['MultimodalMedias'])) {
            if (!empty($map['MultimodalMedias'])) {
                $model->multimodalMedias = [];
                $n1 = 0;
                foreach ($map['MultimodalMedias'] as $item1) {
                    $model->multimodalMedias[$n1++] = multimodalMedias::fromMap($item1);
                }
            }
        }

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }

        if (isset($map['SourceFrom'])) {
            $model->sourceFrom = $map['SourceFrom'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
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
