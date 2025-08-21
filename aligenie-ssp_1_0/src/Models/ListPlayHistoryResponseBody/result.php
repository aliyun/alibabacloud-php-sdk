<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryResponseBody\result\authors;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListPlayHistoryResponseBody\result\cover;

class result extends Model
{
    /**
     * @var string[]
     */
    public $alias;

    /**
     * @var bool
     */
    public $audition;

    /**
     * @var authors[]
     */
    public $authors;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $charge;

    /**
     * @var int
     */
    public $commCateId;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $hotScore;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $valid;
    protected $_name = [
        'alias' => 'Alias',
        'audition' => 'Audition',
        'authors' => 'Authors',
        'category' => 'Category',
        'charge' => 'Charge',
        'commCateId' => 'CommCateId',
        'cover' => 'Cover',
        'description' => 'Description',
        'hotScore' => 'HotScore',
        'id' => 'Id',
        'itemType' => 'ItemType',
        'source' => 'Source',
        'title' => 'Title',
        'type' => 'Type',
        'valid' => 'Valid',
    ];

    public function validate()
    {
        if (\is_array($this->alias)) {
            Model::validateArray($this->alias);
        }
        if (\is_array($this->authors)) {
            Model::validateArray($this->authors);
        }
        if (null !== $this->cover) {
            $this->cover->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            if (\is_array($this->alias)) {
                $res['Alias'] = [];
                $n1 = 0;
                foreach ($this->alias as $item1) {
                    $res['Alias'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->audition) {
            $res['Audition'] = $this->audition;
        }

        if (null !== $this->authors) {
            if (\is_array($this->authors)) {
                $res['Authors'] = [];
                $n1 = 0;
                foreach ($this->authors as $item1) {
                    $res['Authors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->charge) {
            $res['Charge'] = $this->charge;
        }

        if (null !== $this->commCateId) {
            $res['CommCateId'] = $this->commCateId;
        }

        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toArray($noStream) : $this->cover;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hotScore) {
            $res['HotScore'] = $this->hotScore;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
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
        if (isset($map['Alias'])) {
            if (!empty($map['Alias'])) {
                $model->alias = [];
                $n1 = 0;
                foreach ($map['Alias'] as $item1) {
                    $model->alias[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Audition'])) {
            $model->audition = $map['Audition'];
        }

        if (isset($map['Authors'])) {
            if (!empty($map['Authors'])) {
                $model->authors = [];
                $n1 = 0;
                foreach ($map['Authors'] as $item1) {
                    $model->authors[$n1] = authors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Charge'])) {
            $model->charge = $map['Charge'];
        }

        if (isset($map['CommCateId'])) {
            $model->commCateId = $map['CommCateId'];
        }

        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HotScore'])) {
            $model->hotScore = $map['HotScore'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
