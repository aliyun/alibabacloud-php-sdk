<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchResponseBody\result\cover;

class result extends Model
{
    /**
     * @var bool
     */
    public $album;

    /**
     * @var string
     */
    public $albumRawId;

    /**
     * @var int
     */
    public $albumType;

    /**
     * @var string[]
     */
    public $alias;

    /**
     * @var int[]
     */
    public $authorIds;

    /**
     * @var string[]
     */
    public $authorNames;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var bool
     */
    public $isAudition;

    /**
     * @var string
     */
    public $isCharge;

    /**
     * @var bool
     */
    public $needCharge;

    /**
     * @var string
     */
    public $rawId;

    /**
     * @var string
     */
    public $singers;

    /**
     * @var string
     */
    public $source;

    /**
     * @var bool
     */
    public $supportAudition;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'album' => 'Album',
        'albumRawId' => 'AlbumRawId',
        'albumType' => 'AlbumType',
        'alias' => 'Alias',
        'authorIds' => 'AuthorIds',
        'authorNames' => 'AuthorNames',
        'category' => 'Category',
        'contentType' => 'ContentType',
        'cover' => 'Cover',
        'isAudition' => 'IsAudition',
        'isCharge' => 'IsCharge',
        'needCharge' => 'NeedCharge',
        'rawId' => 'RawId',
        'singers' => 'Singers',
        'source' => 'Source',
        'supportAudition' => 'SupportAudition',
        'title' => 'Title',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->alias)) {
            Model::validateArray($this->alias);
        }
        if (\is_array($this->authorIds)) {
            Model::validateArray($this->authorIds);
        }
        if (\is_array($this->authorNames)) {
            Model::validateArray($this->authorNames);
        }
        if (null !== $this->cover) {
            $this->cover->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->album) {
            $res['Album'] = $this->album;
        }

        if (null !== $this->albumRawId) {
            $res['AlbumRawId'] = $this->albumRawId;
        }

        if (null !== $this->albumType) {
            $res['AlbumType'] = $this->albumType;
        }

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

        if (null !== $this->authorIds) {
            if (\is_array($this->authorIds)) {
                $res['AuthorIds'] = [];
                $n1 = 0;
                foreach ($this->authorIds as $item1) {
                    $res['AuthorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorNames) {
            if (\is_array($this->authorNames)) {
                $res['AuthorNames'] = [];
                $n1 = 0;
                foreach ($this->authorNames as $item1) {
                    $res['AuthorNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toArray($noStream) : $this->cover;
        }

        if (null !== $this->isAudition) {
            $res['IsAudition'] = $this->isAudition;
        }

        if (null !== $this->isCharge) {
            $res['IsCharge'] = $this->isCharge;
        }

        if (null !== $this->needCharge) {
            $res['NeedCharge'] = $this->needCharge;
        }

        if (null !== $this->rawId) {
            $res['RawId'] = $this->rawId;
        }

        if (null !== $this->singers) {
            $res['Singers'] = $this->singers;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->supportAudition) {
            $res['SupportAudition'] = $this->supportAudition;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Album'])) {
            $model->album = $map['Album'];
        }

        if (isset($map['AlbumRawId'])) {
            $model->albumRawId = $map['AlbumRawId'];
        }

        if (isset($map['AlbumType'])) {
            $model->albumType = $map['AlbumType'];
        }

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

        if (isset($map['AuthorIds'])) {
            if (!empty($map['AuthorIds'])) {
                $model->authorIds = [];
                $n1 = 0;
                foreach ($map['AuthorIds'] as $item1) {
                    $model->authorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthorNames'])) {
            if (!empty($map['AuthorNames'])) {
                $model->authorNames = [];
                $n1 = 0;
                foreach ($map['AuthorNames'] as $item1) {
                    $model->authorNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }

        if (isset($map['IsAudition'])) {
            $model->isAudition = $map['IsAudition'];
        }

        if (isset($map['IsCharge'])) {
            $model->isCharge = $map['IsCharge'];
        }

        if (isset($map['NeedCharge'])) {
            $model->needCharge = $map['NeedCharge'];
        }

        if (isset($map['RawId'])) {
            $model->rawId = $map['RawId'];
        }

        if (isset($map['Singers'])) {
            $model->singers = $map['Singers'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SupportAudition'])) {
            $model->supportAudition = $map['SupportAudition'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
