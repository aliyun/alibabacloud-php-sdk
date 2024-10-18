<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager;

use AlibabaCloud\Tea\Model;

class DNS extends Model
{
    /**
     * @description The state of the domain name resolution service. Valid values:
     *
     *   uninit: The service is being installed.
     *   initing: The service is being initialized.
     *   running: The service is running.
     *   exception: The service has run into an exception.
     *   releasing: The service is being released.
     *   stopped: The service is stopped.
     *   pending: The service is waiting to be configured.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The resolution type.
     *
     * @example nis
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the resolution service.
     *
     * @example 2.31
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'status'  => 'Status',
        'type'    => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DNS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
