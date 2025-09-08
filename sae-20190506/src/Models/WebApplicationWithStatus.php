<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebApplicationWithStatus extends Model
{
    /**
     * @var WebApplicationStatus
     */
    public $status;

    /**
     * @var WebApplication
     */
    public $webApplication;
    protected $_name = [
        'status' => 'Status',
        'webApplication' => 'WebApplication',
    ];

    public function validate()
    {
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->webApplication) {
            $this->webApplication->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->webApplication) {
            $res['WebApplication'] = null !== $this->webApplication ? $this->webApplication->toArray($noStream) : $this->webApplication;
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
            $model->status = WebApplicationStatus::fromMap($map['Status']);
        }

        if (isset($map['WebApplication'])) {
            $model->webApplication = WebApplication::fromMap($map['WebApplication']);
        }

        return $model;
    }
}
