<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $backed;

    /**
     * @var string
     */
    public $dealReason;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'backed'     => 'Backed',
        'dealReason' => 'DealReason',
        'id'         => 'Id',
        'lang'       => 'Lang',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backed) {
            $res['Backed'] = $this->backed;
        }
        if (null !== $this->dealReason) {
            $res['DealReason'] = $this->dealReason;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backed'])) {
            $model->backed = $map['Backed'];
        }
        if (isset($map['DealReason'])) {
            $model->dealReason = $map['DealReason'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
