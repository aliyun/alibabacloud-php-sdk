<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class VideoDRMLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $states;
    protected $_name = [
        'data' => 'data',
        'deviceInfo' => 'device_info',
        'states' => 'states',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->deviceInfo) {
            $res['device_info'] = $this->deviceInfo;
        }

        if (null !== $this->states) {
            $res['states'] = $this->states;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['device_info'])) {
            $model->deviceInfo = $map['device_info'];
        }

        if (isset($map['states'])) {
            $model->states = $map['states'];
        }

        return $model;
    }
}
