<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListCapabilitiesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $itemCategory;

    /**
     * @var string
     */
    public $itemDesc;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var mixed[]
     */
    public $itemValue;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updated;
    protected $_name = [
        'created' => 'created',
        'isDefault' => 'isDefault',
        'itemCategory' => 'itemCategory',
        'itemDesc' => 'itemDesc',
        'itemName' => 'itemName',
        'itemValue' => 'itemValue',
        'status' => 'status',
        'updated' => 'updated',
    ];

    public function validate()
    {
        if (\is_array($this->itemValue)) {
            Model::validateArray($this->itemValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }

        if (null !== $this->itemCategory) {
            $res['itemCategory'] = $this->itemCategory;
        }

        if (null !== $this->itemDesc) {
            $res['itemDesc'] = $this->itemDesc;
        }

        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }

        if (null !== $this->itemValue) {
            if (\is_array($this->itemValue)) {
                $res['itemValue'] = [];
                foreach ($this->itemValue as $key1 => $value1) {
                    $res['itemValue'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        if (isset($map['itemCategory'])) {
            $model->itemCategory = $map['itemCategory'];
        }

        if (isset($map['itemDesc'])) {
            $model->itemDesc = $map['itemDesc'];
        }

        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }

        if (isset($map['itemValue'])) {
            if (!empty($map['itemValue'])) {
                $model->itemValue = [];
                foreach ($map['itemValue'] as $key1 => $value1) {
                    $model->itemValue[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
