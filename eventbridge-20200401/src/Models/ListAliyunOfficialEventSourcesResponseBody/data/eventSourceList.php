<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponseBody\data\eventSourceList\eventTypes;

class eventSourceList extends Model
{
    /**
     * @var string
     */
    public $arn;
    /**
     * @var float
     */
    public $ctime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $eventBusName;
    /**
     * @var eventTypes[]
     */
    public $eventTypes;
    /**
     * @var string
     */
    public $fullName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'arn'          => 'Arn',
        'ctime'        => 'Ctime',
        'description'  => 'Description',
        'eventBusName' => 'EventBusName',
        'eventTypes'   => 'EventTypes',
        'fullName'     => 'FullName',
        'name'         => 'Name',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->eventTypes) {
            if (\is_array($this->eventTypes)) {
                $res['EventTypes'] = [];
                $n1                = 0;
                foreach ($this->eventTypes as $item1) {
                    $res['EventTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n1                = 0;
                foreach ($map['EventTypes'] as $item1) {
                    $model->eventTypes[$n1++] = eventTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
