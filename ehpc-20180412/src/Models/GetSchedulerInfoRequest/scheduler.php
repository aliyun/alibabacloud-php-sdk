<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoRequest;

use AlibabaCloud\Dara\Model;

class scheduler extends Model
{
    /**
     * @var string
     */
    public $schedName;
    protected $_name = [
        'schedName' => 'SchedName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schedName) {
            $res['SchedName'] = $this->schedName;
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
        if (isset($map['SchedName'])) {
            $model->schedName = $map['SchedName'];
        }

        return $model;
    }
}
