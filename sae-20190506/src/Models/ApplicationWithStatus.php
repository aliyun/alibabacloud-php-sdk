<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ApplicationWithStatus extends Model
{
    /**
     * @var Application
     */
    public $application;

    /**
     * @var ApplicationStatus
     */
    public $status;
    protected $_name = [
        'application' => 'application',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['application'] = null !== $this->application ? $this->application->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationWithStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['application'])) {
            $model->application = Application::fromMap($map['application']);
        }
        if (isset($map['status'])) {
            $model->status = ApplicationStatus::fromMap($map['status']);
        }

        return $model;
    }
}
