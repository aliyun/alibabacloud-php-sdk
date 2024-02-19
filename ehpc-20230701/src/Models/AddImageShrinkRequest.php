<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\Tea\Model;

class AddImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $containerImageSpecShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @example app-image
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $VMImageSpecShrink;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'containerImageSpecShrink' => 'ContainerImageSpec',
        'description'              => 'Description',
        'name'                     => 'Name',
        'VMImageSpecShrink'        => 'VMImageSpec',
        'version'                  => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerImageSpecShrink) {
            $res['ContainerImageSpec'] = $this->containerImageSpecShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->VMImageSpecShrink) {
            $res['VMImageSpec'] = $this->VMImageSpecShrink;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerImageSpec'])) {
            $model->containerImageSpecShrink = $map['ContainerImageSpec'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VMImageSpec'])) {
            $model->VMImageSpecShrink = $map['VMImageSpec'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
