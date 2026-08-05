<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListExperienceDataResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $created;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var int
     */
    public $updated;
    protected $_name = [
        'contentType' => 'contentType',
        'created' => 'created',
        'dataSize' => 'dataSize',
        'dataType' => 'dataType',
        'dataValue' => 'dataValue',
        'id' => 'id',
        'name' => 'name',
        'serviceType' => 'serviceType',
        'updated' => 'updated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->dataSize) {
            $res['dataSize'] = $this->dataSize;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->dataValue) {
            $res['dataValue'] = $this->dataValue;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['dataSize'])) {
            $model->dataSize = $map['dataSize'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['dataValue'])) {
            $model->dataValue = $map['dataValue'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
