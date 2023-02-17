<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlertRequest extends Model
{
    /**
     * @var Alert
     */
    public $alert;
    protected $_name = [
        'alert' => 'alert',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alert) {
            $res['alert'] = null !== $this->alert ? $this->alert->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alert'])) {
            $model->alert = Alert::fromMap($map['alert']);
        }

        return $model;
    }
}
