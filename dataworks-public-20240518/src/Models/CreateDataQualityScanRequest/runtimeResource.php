<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest;

use AlibabaCloud\Tea\Model;

class runtimeResource extends Model
{
    /**
     * @example 0.25
     *
     * @var float
     */
    public $cu;

    /**
     * @example 0525242e-d0ee-4bda-bc73-765d82f6a34a
     *
     * @var string
     */
    public $id;

    /**
     * @example i-xxxxxx
     *
     * @var string
     */
    public $image;
    protected $_name = [
        'cu' => 'Cu',
        'id' => 'Id',
        'image' => 'Image',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        return $model;
    }
}
