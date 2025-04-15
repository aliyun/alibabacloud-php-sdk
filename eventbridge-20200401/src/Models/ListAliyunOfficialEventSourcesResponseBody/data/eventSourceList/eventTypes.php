<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponseBody\data\eventSourceList;

use AlibabaCloud\Dara\Model;

class eventTypes extends Model
{
    /**
     * @var string
     */
    public $eventSourceName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $shortName;
    protected $_name = [
        'eventSourceName' => 'EventSourceName',
        'groupName' => 'GroupName',
        'name' => 'Name',
        'shortName' => 'ShortName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSourceName) {
            $res['EventSourceName'] = $this->eventSourceName;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
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
        if (isset($map['EventSourceName'])) {
            $model->eventSourceName = $map['EventSourceName'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }

        return $model;
    }
}
