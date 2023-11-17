<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class ListDigitalHumanMaterialsRequest extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var bool
     */
    public $onlyPersonalMaterials;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $types;
    protected $_name = [
        'current'               => 'Current',
        'jwtToken'              => 'JwtToken',
        'onlyPersonalMaterials' => 'OnlyPersonalMaterials',
        'size'                  => 'Size',
        'types'                 => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->onlyPersonalMaterials) {
            $res['OnlyPersonalMaterials'] = $this->onlyPersonalMaterials;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDigitalHumanMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['OnlyPersonalMaterials'])) {
            $model->onlyPersonalMaterials = $map['OnlyPersonalMaterials'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }

        return $model;
    }
}
