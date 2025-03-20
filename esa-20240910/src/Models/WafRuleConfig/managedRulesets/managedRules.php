<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\managedRulesets;

use AlibabaCloud\Tea\Model;

class managedRules extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'id' => 'Id',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
