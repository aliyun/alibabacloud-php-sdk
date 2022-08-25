<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchResponseBody\result\cover;
use AlibabaCloud\Tea\Model;

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
     * @var int
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
        'album'           => 'Album',
        'albumRawId'      => 'AlbumRawId',
        'albumType'       => 'AlbumType',
        'alias'           => 'Alias',
        'authorIds'       => 'AuthorIds',
        'authorNames'     => 'AuthorNames',
        'category'        => 'Category',
        'contentType'     => 'ContentType',
        'cover'           => 'Cover',
        'isAudition'      => 'IsAudition',
        'isCharge'        => 'IsCharge',
        'needCharge'      => 'NeedCharge',
        'rawId'           => 'RawId',
        'singers'         => 'Singers',
        'source'          => 'Source',
        'supportAudition' => 'SupportAudition',
        'title'           => 'Title',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->authorIds) {
            $res['AuthorIds'] = $this->authorIds;
        }
        if (null !== $this->authorNames) {
            $res['AuthorNames'] = $this->authorNames;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
                $model->alias = $map['Alias'];
            }
        }
        if (isset($map['AuthorIds'])) {
            if (!empty($map['AuthorIds'])) {
                $model->authorIds = $map['AuthorIds'];
            }
        }
        if (isset($map['AuthorNames'])) {
            if (!empty($map['AuthorNames'])) {
                $model->authorNames = $map['AuthorNames'];
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
