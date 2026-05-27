<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class UpdateMmsDbRequest extends Model
{
    /**
     * @var string
     */
    public $dstName;

    /**
     * @var string
     */
    public $dstProjectName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dstName' => 'dstName',
        'dstProjectName' => 'dstProjectName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstName) {
            $res['dstName'] = $this->dstName;
        }

        if (null !== $this->dstProjectName) {
            $res['dstProjectName'] = $this->dstProjectName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['dstName'])) {
            $model->dstName = $map['dstName'];
        }

        if (isset($map['dstProjectName'])) {
            $model->dstProjectName = $map['dstProjectName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
