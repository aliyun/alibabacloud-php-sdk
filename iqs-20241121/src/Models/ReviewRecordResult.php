<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class ReviewRecordResult extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $sceneDesc;

    /**
     * @var string[]
     */
    public $scopes;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'address' => 'address',
        'applyType' => 'applyType',
        'contactName' => 'contactName',
        'phone' => 'phone',
        'sceneDesc' => 'sceneDesc',
        'scopes' => 'scopes',
        'serviceType' => 'serviceType',
    ];

    public function validate()
    {
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->applyType) {
            $res['applyType'] = $this->applyType;
        }

        if (null !== $this->contactName) {
            $res['contactName'] = $this->contactName;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->sceneDesc) {
            $res['sceneDesc'] = $this->sceneDesc;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['scopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['applyType'])) {
            $model->applyType = $map['applyType'];
        }

        if (isset($map['contactName'])) {
            $model->contactName = $map['contactName'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['sceneDesc'])) {
            $model->sceneDesc = $map['sceneDesc'];
        }

        if (isset($map['scopes'])) {
            if (!empty($map['scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['scopes'] as $item1) {
                    $model->scopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        return $model;
    }
}
