<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteResourceInstancesRequest extends Model
{
    /**
     * @var bool
     */
    public $allFailed;

    /**
     * @var string
     */
    public $instanceList;
    protected $_name = [
        'allFailed' => 'AllFailed',
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allFailed) {
            $res['AllFailed'] = $this->allFailed;
        }

        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
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
        if (isset($map['AllFailed'])) {
            $model->allFailed = $map['AllFailed'];
        }

        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }

        return $model;
    }
}
