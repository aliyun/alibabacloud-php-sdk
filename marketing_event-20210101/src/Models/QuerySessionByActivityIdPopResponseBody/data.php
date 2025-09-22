<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionByActivityIdPopResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionEn;

    /**
     * @var string
     */
    public $endDateTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $startDateTime;
    protected $_name = [
        'description' => 'Description',
        'descriptionEn' => 'DescriptionEn',
        'endDateTime' => 'EndDateTime',
        'id' => 'Id',
        'location' => 'Location',
        'name' => 'Name',
        'nameEn' => 'NameEn',
        'startDateTime' => 'StartDateTime',
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
