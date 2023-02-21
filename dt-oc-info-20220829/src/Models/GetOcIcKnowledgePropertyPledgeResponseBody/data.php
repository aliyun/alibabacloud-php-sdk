<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcKnowledgePropertyPledgeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example 13311865
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $pawnee;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $pledgor;

    /**
     * @example 2016-06-02
     *
     * @var string
     */
    public $publicDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name'       => 'Name',
        'number'     => 'Number',
        'pawnee'     => 'Pawnee',
        'period'     => 'Period',
        'pledgor'    => 'Pledgor',
        'publicDate' => 'PublicDate',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->pawnee) {
            $res['Pawnee'] = $this->pawnee;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->pledgor) {
            $res['Pledgor'] = $this->pledgor;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Pawnee'])) {
            $model->pawnee = $map['Pawnee'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Pledgor'])) {
            $model->pledgor = $map['Pledgor'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
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
