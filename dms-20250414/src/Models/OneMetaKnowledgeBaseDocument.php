<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaKnowledgeBaseDocument extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $docsCount;

    /**
     * @var string
     */
    public $documentLoaderName;

    /**
     * @var string
     */
    public $fileExt;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $kbUuid;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $textSplitterName;
    protected $_name = [
        'description' => 'Description',
        'docsCount' => 'DocsCount',
        'documentLoaderName' => 'DocumentLoaderName',
        'fileExt' => 'FileExt',
        'fileSize' => 'FileSize',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'kbUuid' => 'KbUuid',
        'keywords' => 'Keywords',
        'name' => 'Name',
        'state' => 'State',
        'summary' => 'Summary',
        'textSplitterName' => 'TextSplitterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->docsCount) {
            $res['DocsCount'] = $this->docsCount;
        }

        if (null !== $this->documentLoaderName) {
            $res['DocumentLoaderName'] = $this->documentLoaderName;
        }

        if (null !== $this->fileExt) {
            $res['FileExt'] = $this->fileExt;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
        }

        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->textSplitterName) {
            $res['TextSplitterName'] = $this->textSplitterName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocsCount'])) {
            $model->docsCount = $map['DocsCount'];
        }

        if (isset($map['DocumentLoaderName'])) {
            $model->documentLoaderName = $map['DocumentLoaderName'];
        }

        if (isset($map['FileExt'])) {
            $model->fileExt = $map['FileExt'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TextSplitterName'])) {
            $model->textSplitterName = $map['TextSplitterName'];
        }

        return $model;
    }
}
