<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies\movie\movieTypeList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryHotMoviesResponseBody\movies\movie\trailerList;
use AlibabaCloud\Tea\Model;

class movie extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $movieVersion;

    /**
     * @var string
     */
    public $backgroundPicture;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $openDay;

    /**
     * @var string
     */
    public $highlight;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $openTime;

    /**
     * @var string
     */
    public $director;

    /**
     * @var string
     */
    public $poster;

    /**
     * @var string
     */
    public $movieName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $country;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $movieNameEn;

    /**
     * @var string
     */
    public $leadingRole;

    /**
     * @var int
     */
    public $id;

    /**
     * @var movieTypeList
     */
    public $movieTypeList;

    /**
     * @var trailerList
     */
    public $trailerList;
    protected $_name = [
        'type'              => 'Type',
        'movieVersion'      => 'MovieVersion',
        'backgroundPicture' => 'BackgroundPicture',
        'remark'            => 'Remark',
        'openDay'           => 'OpenDay',
        'highlight'         => 'Highlight',
        'language'          => 'Language',
        'openTime'          => 'OpenTime',
        'director'          => 'Director',
        'poster'            => 'Poster',
        'movieName'         => 'MovieName',
        'description'       => 'Description',
        'country'           => 'Country',
        'duration'          => 'Duration',
        'movieNameEn'       => 'MovieNameEn',
        'leadingRole'       => 'LeadingRole',
        'id'                => 'Id',
        'movieTypeList'     => 'MovieTypeList',
        'trailerList'       => 'TrailerList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->movieVersion) {
            $res['MovieVersion'] = $this->movieVersion;
        }
        if (null !== $this->backgroundPicture) {
            $res['BackgroundPicture'] = $this->backgroundPicture;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->openDay) {
            $res['OpenDay'] = $this->openDay;
        }
        if (null !== $this->highlight) {
            $res['Highlight'] = $this->highlight;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->director) {
            $res['Director'] = $this->director;
        }
        if (null !== $this->poster) {
            $res['Poster'] = $this->poster;
        }
        if (null !== $this->movieName) {
            $res['MovieName'] = $this->movieName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->movieNameEn) {
            $res['MovieNameEn'] = $this->movieNameEn;
        }
        if (null !== $this->leadingRole) {
            $res['LeadingRole'] = $this->leadingRole;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->movieTypeList) {
            $res['MovieTypeList'] = null !== $this->movieTypeList ? $this->movieTypeList->toMap() : null;
        }
        if (null !== $this->trailerList) {
            $res['TrailerList'] = null !== $this->trailerList ? $this->trailerList->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MovieVersion'])) {
            $model->movieVersion = $map['MovieVersion'];
        }
        if (isset($map['BackgroundPicture'])) {
            $model->backgroundPicture = $map['BackgroundPicture'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['OpenDay'])) {
            $model->openDay = $map['OpenDay'];
        }
        if (isset($map['Highlight'])) {
            $model->highlight = $map['Highlight'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['Director'])) {
            $model->director = $map['Director'];
        }
        if (isset($map['Poster'])) {
            $model->poster = $map['Poster'];
        }
        if (isset($map['MovieName'])) {
            $model->movieName = $map['MovieName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MovieNameEn'])) {
            $model->movieNameEn = $map['MovieNameEn'];
        }
        if (isset($map['LeadingRole'])) {
            $model->leadingRole = $map['LeadingRole'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MovieTypeList'])) {
            $model->movieTypeList = movieTypeList::fromMap($map['MovieTypeList']);
        }
        if (isset($map['TrailerList'])) {
            $model->trailerList = trailerList::fromMap($map['TrailerList']);
        }

        return $model;
    }
}
