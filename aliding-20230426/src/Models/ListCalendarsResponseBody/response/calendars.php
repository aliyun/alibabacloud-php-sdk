<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody\response;

use AlibabaCloud\Tea\Model;

class calendars extends Model
{
    /**
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 0
     *
     * @var string
     */
    public $ETag;

    /**
     * @example cnNTbWxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example VIEW_DETAIL
     *
     * @var string
     */
    public $privilege;

    /**
     * @example 标题
     *
     * @var string
     */
    public $summary;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example primary
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'ETag'        => 'ETag',
        'id'          => 'Id',
        'privilege'   => 'Privilege',
        'summary'     => 'Summary',
        'timeZone'    => 'TimeZone',
        'type'        => 'Type',
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

    /**
     * @param array $map
     *
     * @return calendars
     */
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
