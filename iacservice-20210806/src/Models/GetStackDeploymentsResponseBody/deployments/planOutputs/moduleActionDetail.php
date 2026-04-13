<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\planOutputs;

use AlibabaCloud\Dara\Model;

class moduleActionDetail extends Model
{
    /**
     * @var int
     */
    public $add;

    /**
     * @var int
     */
    public $change;

    /**
     * @var int
     */
    public $destroy;
    protected $_name = [
        'add' => 'add',
        'change' => 'change',
        'destroy' => 'destroy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->add) {
            $res['add'] = $this->add;
        }

        if (null !== $this->change) {
            $res['change'] = $this->change;
        }

        if (null !== $this->destroy) {
            $res['destroy'] = $this->destroy;
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
        if (isset($map['add'])) {
            $model->add = $map['add'];
        }

        if (isset($map['change'])) {
            $model->change = $map['change'];
        }

        if (isset($map['destroy'])) {
            $model->destroy = $map['destroy'];
        }

        return $model;
    }
}
