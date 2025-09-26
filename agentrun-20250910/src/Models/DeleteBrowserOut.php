<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class DeleteBrowserOut extends Model
{
    /**
     * @var string
     */
    public $browserId;

    /**
     * @var string
     */
    public $browserName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'browserId' => 'browserId',
        'browserName' => 'browserName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserId) {
            $res['browserId'] = $this->browserId;
        }

        if (null !== $this->browserName) {
            $res['browserName'] = $this->browserName;
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
        if (isset($map['browserId'])) {
            $model->browserId = $map['browserId'];
        }

        if (isset($map['browserName'])) {
            $model->browserName = $map['browserName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
