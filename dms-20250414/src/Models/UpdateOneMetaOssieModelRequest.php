<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UpdateOneMetaOssieModelRequest extends Model
{
    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $docFormat;

    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $knowledgeUuid;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'catalogUuid' => 'CatalogUuid',
        'databaseUuid' => 'DatabaseUuid',
        'description' => 'Description',
        'docFormat' => 'DocFormat',
        'document' => 'Document',
        'knowledgeUuid' => 'KnowledgeUuid',
        'tag' => 'Tag',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->docFormat) {
            $res['DocFormat'] = $this->docFormat;
        }

        if (null !== $this->document) {
            $res['Document'] = $this->document;
        }

        if (null !== $this->knowledgeUuid) {
            $res['KnowledgeUuid'] = $this->knowledgeUuid;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocFormat'])) {
            $model->docFormat = $map['DocFormat'];
        }

        if (isset($map['Document'])) {
            $model->document = $map['Document'];
        }

        if (isset($map['KnowledgeUuid'])) {
            $model->knowledgeUuid = $map['KnowledgeUuid'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
