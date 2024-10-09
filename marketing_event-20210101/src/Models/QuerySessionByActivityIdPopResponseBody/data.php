<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionByActivityIdPopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @example description
     *
     * @var string
     */
    public $descriptionEn;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $endDateTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 地点
     *
     * @var string
     */
    public $location;

    /**
     * @example 1234
     *
     * @var string
     */
    public $name;

    /**
     * @example name
     *
     * @var string
     */
    public $nameEn;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $startDateTime;
    protected $_name = [
        'description'   => 'Description',
        'descriptionEn' => 'DescriptionEn',
        'endDateTime'   => 'EndDateTime',
        'id'            => 'Id',
        'location'      => 'Location',
        'name'          => 'Name',
        'nameEn'        => 'NameEn',
        'startDateTime' => 'StartDateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->descriptionEn) {
            $res['DescriptionEn'] = $this->descriptionEn;
        }
        if (null !== $this->endDateTime) {
            $res['EndDateTime'] = $this->endDateTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }
        if (null !== $this->startDateTime) {
            $res['StartDateTime'] = $this->startDateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DescriptionEn'])) {
            $model->descriptionEn = $map['DescriptionEn'];
        }
        if (isset($map['EndDateTime'])) {
            $model->endDateTime = $map['EndDateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['StartDateTime'])) {
            $model->startDateTime = $map['StartDateTime'];
        }

        return $model;
    }
}
