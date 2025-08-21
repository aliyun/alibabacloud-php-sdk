<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class renderingStatus extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $latestAction;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'latestAction' => 'LatestAction',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->latestAction) {
            $res['LatestAction'] = $this->latestAction;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LatestAction'])) {
            $model->latestAction = $map['LatestAction'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
