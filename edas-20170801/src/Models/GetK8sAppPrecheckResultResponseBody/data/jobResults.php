<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class jobResults extends Model
{
    /**
     * @var bool
     */
    public $interrupted;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $pass;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'interrupted' => 'Interrupted',
        'name' => 'Name',
        'pass' => 'Pass',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interrupted) {
            $res['Interrupted'] = $this->interrupted;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Interrupted'])) {
            $model->interrupted = $map['Interrupted'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
