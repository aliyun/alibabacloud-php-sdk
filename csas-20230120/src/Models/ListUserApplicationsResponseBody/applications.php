<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserApplicationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserApplicationsResponseBody\applications\portRanges;

class applications extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var string[]
     */
    public $addresses;
    /**
     * @var string
     */
    public $applicationId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var portRanges[]
     */
    public $portRanges;
    /**
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
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (\is_array($this->portRanges)) {
            Model::validateArray($this->portRanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1               = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->portRanges) {
            if (\is_array($this->portRanges)) {
                $res['PortRanges'] = [];
                $n1                = 0;
                foreach ($this->portRanges as $item1) {
                    $res['PortRanges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1               = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1++] = $item1;
                }
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
                $n1                = 0;
                foreach ($map['PortRanges'] as $item1) {
                    $model->portRanges[$n1++] = portRanges::fromMap($item1);
                }
            }
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
