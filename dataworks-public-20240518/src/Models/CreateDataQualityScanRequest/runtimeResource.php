<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest;

use AlibabaCloud\Dara\Model;

class runtimeResource extends Model
{
    /**
     * @var float
     */
    public $cu;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $image;
    protected $_name = [
        'cu' => 'Cu',
        'id' => 'Id',
        'image' => 'Image',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
