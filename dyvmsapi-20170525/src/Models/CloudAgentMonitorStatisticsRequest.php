<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudAgentMonitorStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $cnos;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var string
     */
    public $gno;

    /**
     * @var string
     */
    public $isNeedQueueName;

    /**
     * @var int
     */
    public $isUseGno;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $startHour;
    protected $_name = [
        'cnos' => 'Cnos',
        'endHour' => 'EndHour',
        'enterpriseId' => 'EnterpriseId',
        'fields' => 'Fields',
        'gno' => 'Gno',
        'isNeedQueueName' => 'IsNeedQueueName',
        'isUseGno' => 'IsUseGno',
        'limit' => 'Limit',
        'offset' => 'Offset',
        'startHour' => 'StartHour',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnos) {
            $res['Cnos'] = $this->cnos;
        }

        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }

        if (null !== $this->gno) {
            $res['Gno'] = $this->gno;
        }

        if (null !== $this->isNeedQueueName) {
            $res['IsNeedQueueName'] = $this->isNeedQueueName;
        }

        if (null !== $this->isUseGno) {
            $res['IsUseGno'] = $this->isUseGno;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
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
        if (isset($map['Cnos'])) {
            $model->cnos = $map['Cnos'];
        }

        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }

        if (isset($map['Gno'])) {
            $model->gno = $map['Gno'];
        }

        if (isset($map['IsNeedQueueName'])) {
            $model->isNeedQueueName = $map['IsNeedQueueName'];
        }

        if (isset($map['IsUseGno'])) {
            $model->isUseGno = $map['IsUseGno'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        return $model;
    }
}
