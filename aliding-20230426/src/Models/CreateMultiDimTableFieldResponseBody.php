<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateMultiDimTableFieldResponseBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $property;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'property' => 'Property',
        'type' => 'Type',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                foreach ($this->property as $key1 => $value1) {
                    $res['Property'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                foreach ($map['Property'] as $key1 => $value1) {
                    $model->property[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
