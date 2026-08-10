<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaSqlTemplateView extends Model
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
    public $expr;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $knowledgeUuid;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sqlParams;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'catalogUuid' => 'CatalogUuid',
        'databaseUuid' => 'DatabaseUuid',
        'description' => 'Description',
        'expr' => 'Expr',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'knowledgeUuid' => 'KnowledgeUuid',
        'source' => 'Source',
        'sqlParams' => 'SqlParams',
        'summary' => 'Summary',
        'tag' => 'Tag',
        'title' => 'Title',
        'version' => 'Version',
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

        if (null !== $this->expr) {
            $res['Expr'] = $this->expr;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->knowledgeUuid) {
            $res['KnowledgeUuid'] = $this->knowledgeUuid;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sqlParams) {
            $res['SqlParams'] = $this->sqlParams;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['Expr'])) {
            $model->expr = $map['Expr'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['KnowledgeUuid'])) {
            $model->knowledgeUuid = $map['KnowledgeUuid'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SqlParams'])) {
            $model->sqlParams = $map['SqlParams'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
