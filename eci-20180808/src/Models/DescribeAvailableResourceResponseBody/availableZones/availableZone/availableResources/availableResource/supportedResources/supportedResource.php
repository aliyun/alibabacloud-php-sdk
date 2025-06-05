<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;

use AlibabaCloud\Dara\Model;

class supportedResource extends Model
{
    /**
     * @var string
     */
    public $statusCategory;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'statusCategory' => 'StatusCategory',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
