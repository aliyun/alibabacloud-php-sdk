<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUpcomingMoviesResponseBody\movies;

use AlibabaCloud\Tea\Model;

class movie extends Model
{
    /**
     * @var string
     */
    public $backgroundPicture;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $director;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $highlight;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $leadingRole;

    /**
     * @var string
     */
    public $movieName;

    /**
     * @var string
     */
    public $movieNameEn;

    /**
     * @var string
     */
    public $movieTypeList;

    /**
     * @var string
     */
    public $movieVersion;

    /**
     * @var string
     */
    public $openDay;

    /**
     * @var string
     */
    public $openTime;

    /**
     * @var string
     */
    public $poster;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
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
            $res['MovieTypeList'] = $this->movieTypeList;
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
            $res['TrailerList'] = $this->trailerList;
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
            $model->movieTypeList = $map['MovieTypeList'];
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
            $model->trailerList = $map['TrailerList'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
