<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateAiModelSourceRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $expectedVersion;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'displayName' => 'displayName',
        'expectedVersion' => 'expectedVersion',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->expectedVersion) {
            $res['expectedVersion'] = $this->expectedVersion;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['expectedVersion'])) {
            $model->expectedVersion = $map['expectedVersion'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
