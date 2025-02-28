<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class CreateSavepointRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $nativeFormat;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'description'  => 'description',
        'nativeFormat' => 'nativeFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->nativeFormat) {
            $res['nativeFormat'] = $this->nativeFormat;
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
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['nativeFormat'])) {
            $model->nativeFormat = $map['nativeFormat'];
        }

        return $model;
    }
}
