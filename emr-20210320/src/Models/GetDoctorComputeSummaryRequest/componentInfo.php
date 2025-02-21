<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryRequest;

use AlibabaCloud\Dara\Model;

class componentInfo extends Model
{
    /**
     * @var string
     */
    public $componentName;
    /**
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentName' => 'ComponentName',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
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
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}
