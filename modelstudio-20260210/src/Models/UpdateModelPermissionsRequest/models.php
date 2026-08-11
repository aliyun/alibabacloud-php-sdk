<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateModelPermissionsRequest;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var bool
     */
    public $deploy;

    /**
     * @var bool
     */
    public $fineTune;

    /**
     * @var bool
     */
    public $inference;

    /**
     * @var string
     */
    public $model;
    protected $_name = [
        'deploy' => 'deploy',
        'fineTune' => 'fineTune',
        'inference' => 'inference',
        'model' => 'model',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploy) {
            $res['deploy'] = $this->deploy;
        }

        if (null !== $this->fineTune) {
            $res['fineTune'] = $this->fineTune;
        }

        if (null !== $this->inference) {
            $res['inference'] = $this->inference;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
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
        if (isset($map['deploy'])) {
            $model->deploy = $map['deploy'];
        }

        if (isset($map['fineTune'])) {
            $model->fineTune = $map['fineTune'];
        }

        if (isset($map['inference'])) {
            $model->inference = $map['inference'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        return $model;
    }
}
