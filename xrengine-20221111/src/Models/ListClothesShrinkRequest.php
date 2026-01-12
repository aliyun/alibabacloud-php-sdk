<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class ListClothesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoriesShrink;

    /**
     * @var string
     */
    public $clothSize;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'categoriesShrink' => 'Categories',
        'clothSize' => 'ClothSize',
        'current' => 'Current',
        'jwtToken' => 'JwtToken',
        'name' => 'Name',
        'size' => 'Size',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoriesShrink) {
            $res['Categories'] = $this->categoriesShrink;
        }

        if (null !== $this->clothSize) {
            $res['ClothSize'] = $this->clothSize;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Categories'])) {
            $model->categoriesShrink = $map['Categories'];
        }

        if (isset($map['ClothSize'])) {
            $model->clothSize = $map['ClothSize'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
