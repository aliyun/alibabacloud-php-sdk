<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies\movie\movieTypeList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies\movie\trailerList;
use AlibabaCloud\Tea\Model;

class movie extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $backgroundPicture;

    /**
     * @example ""
     *
     * @var string
     */
    public $country;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @example ""
     *
     * @var string
     */
    public $director;

    /**
     * @example 190
     *
     * @var int
     */
    public $duration;

    /**
     * @example ""
     *
     * @var string
     */
    public $highlight;

    /**
     * @example 5790
     *
     * @var int
     */
    public $id;

    /**
     * @example ""
     *
     * @var string
     */
    public $language;

    /**
     * @example ""
     *
     * @var string
     */
    public $leadingRole;

    /**
     * @example ""
     *
     * @var string
     */
    public $movieName;

    /**
     * @example ""
     *
     * @var string
     */
    public $movieNameEn;

    /**
     * @var movieTypeList
     */
    public $movieTypeList;

    /**
     * @example ""
     *
     * @var string
     */
    public $movieVersion;

    /**
     * @example 2022-04-01 12:00:00
     *
     * @var string
     */
    public $openDay;

    /**
     * @example 2022-04-01 12:00:00
     *
     * @var string
     */
    public $openTime;

    /**
     * @example ""
     *
     * @var string
     */
    public $poster;

    /**
     * @example 9.7
     *
     * @var string
     */
    public $remark;

    /**
     * @var trailerList
     */
    public $trailerList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'backgroundPicture' => 'BackgroundPicture',
        'country'           => 'Country',
        'description'       => 'Description',
        'director'          => 'Director',
        'duration'          => 'Duration',
        'highlight'         => 'Highlight',
        'id'                => 'Id',
        'language'          => 'Language',
        'leadingRole'       => 'LeadingRole',
        'movieName'         => 'MovieName',
        'movieNameEn'       => 'MovieNameEn',
        'movieTypeList'     => 'MovieTypeList',
        'movieVersion'      => 'MovieVersion',
        'openDay'           => 'OpenDay',
        'openTime'          => 'OpenTime',
        'poster'            => 'Poster',
        'remark'            => 'Remark',
        'trailerList'       => 'TrailerList',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundPicture) {
            $res['BackgroundPicture'] = $this->backgroundPicture;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->director) {
            $res['Director'] = $this->director;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->highlight) {
            $res['Highlight'] = $this->highlight;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->leadingRole) {
            $res['LeadingRole'] = $this->leadingRole;
        }
        if (null !== $this->movieName) {
            $res['MovieName'] = $this->movieName;
        }
        if (null !== $this->movieNameEn) {
            $res['MovieNameEn'] = $this->movieNameEn;
        }
        if (null !== $this->movieTypeList) {
            $res['MovieTypeList'] = null !== $this->movieTypeList ? $this->movieTypeList->toMap() : null;
        }
        if (null !== $this->movieVersion) {
            $res['MovieVersion'] = $this->movieVersion;
        }
        if (null !== $this->openDay) {
            $res['OpenDay'] = $this->openDay;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->poster) {
            $res['Poster'] = $this->poster;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->trailerList) {
            $res['TrailerList'] = null !== $this->trailerList ? $this->trailerList->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return movie
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundPicture'])) {
            $model->backgroundPicture = $map['BackgroundPicture'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Director'])) {
            $model->director = $map['Director'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Highlight'])) {
            $model->highlight = $map['Highlight'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LeadingRole'])) {
            $model->leadingRole = $map['LeadingRole'];
        }
        if (isset($map['MovieName'])) {
            $model->movieName = $map['MovieName'];
        }
        if (isset($map['MovieNameEn'])) {
            $model->movieNameEn = $map['MovieNameEn'];
        }
        if (isset($map['MovieTypeList'])) {
            $model->movieTypeList = movieTypeList::fromMap($map['MovieTypeList']);
        }
        if (isset($map['MovieVersion'])) {
            $model->movieVersion = $map['MovieVersion'];
        }
        if (isset($map['OpenDay'])) {
            $model->openDay = $map['OpenDay'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['Poster'])) {
            $model->poster = $map['Poster'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TrailerList'])) {
            $model->trailerList = trailerList::fromMap($map['TrailerList']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
