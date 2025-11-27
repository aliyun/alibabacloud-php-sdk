<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCResourcesModificationResponseBody\availableZones\availableResources;

use AlibabaCloud\Dara\Model;

class supportedResources extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusCategory;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
