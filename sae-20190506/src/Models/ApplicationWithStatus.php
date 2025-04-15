<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->application) {
            $this->application->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->application) {
            $res['application'] = null !== $this->application ? $this->application->toArray($noStream) : $this->application;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['application'])) {
            $model->application = Application::fromMap($map['application']);
        }

        if (isset($map['status'])) {
            $model->status = ApplicationStatus::fromMap($map['status']);
        }

        return $model;
    }
}
