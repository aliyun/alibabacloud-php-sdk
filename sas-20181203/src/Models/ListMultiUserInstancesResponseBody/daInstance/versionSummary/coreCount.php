<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance\versionSummary;

use AlibabaCloud\Dara\Model;

class coreCount extends Model
{
    /**
     * @var int
     */
    public $assigned;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $used;
    protected $_name = [
        'assigned' => 'Assigned',
        'count' => 'Count',
        'used' => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assigned) {
            $res['Assigned'] = $this->assigned;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
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
        if (isset($map['Assigned'])) {
            $model->assigned = $map['Assigned'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
