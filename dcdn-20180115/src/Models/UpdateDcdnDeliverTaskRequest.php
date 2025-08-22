<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class UpdateDcdnDeliverTaskRequest extends Model
{
    /**
     * @var string
     */
    public $deliver;

    /**
     * @var int
     */
    public $deliverId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $reports;

    /**
     * @var string
     */
    public $schedule;
    protected $_name = [
        'deliver' => 'Deliver',
        'deliverId' => 'DeliverId',
        'domainName' => 'DomainName',
        'name' => 'Name',
        'reports' => 'Reports',
        'schedule' => 'Schedule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliver) {
            $res['Deliver'] = $this->deliver;
        }

        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->reports) {
            $res['Reports'] = $this->reports;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
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
        if (isset($map['Deliver'])) {
            $model->deliver = $map['Deliver'];
        }

        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Reports'])) {
            $model->reports = $map['Reports'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        return $model;
    }
}
