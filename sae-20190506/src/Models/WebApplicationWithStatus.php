<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'status'         => 'Status',
        'webApplication' => 'WebApplication',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->webApplication) {
            $res['WebApplication'] = null !== $this->webApplication ? $this->webApplication->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebApplicationWithStatus
     */
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
