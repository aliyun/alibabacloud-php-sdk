<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CatalogPbcRoleCreateCmd extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $marketResource;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pbcResource;
    protected $_name = [
        'companyId' => 'companyId',
        'marketId' => 'marketId',
        'marketResource' => 'marketResource',
        'name' => 'name',
        'pbcResource' => 'pbcResource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->marketResource) {
            $res['marketResource'] = $this->marketResource;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pbcResource) {
            $res['pbcResource'] = $this->pbcResource;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['marketResource'])) {
            $model->marketResource = $map['marketResource'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pbcResource'])) {
            $model->pbcResource = $map['pbcResource'];
        }

        return $model;
    }
}
