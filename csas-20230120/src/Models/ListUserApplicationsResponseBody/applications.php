<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserApplicationsResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserApplicationsResponseBody\applications\portRanges;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @example Block
     *
     * @var string
     */
    public $action;

    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @example pa-application-b927baf3e592****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example private_access_application_name
     *
     * @var string
     */
    public $name;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @example TCP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'action'        => 'Action',
        'addresses'     => 'Addresses',
        'applicationId' => 'ApplicationId',
        'name'          => 'Name',
        'portRanges'    => 'PortRanges',
        'protocol'      => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = $map['Addresses'];
            }
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
