<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody\response;

use AlibabaCloud\Dara\Model;

class calendars extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ETag;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $privilege;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'ETag' => 'ETag',
        'id' => 'Id',
        'privilege' => 'Privilege',
        'summary' => 'Summary',
        'timeZone' => 'TimeZone',
        'type' => 'Type',
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

        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
