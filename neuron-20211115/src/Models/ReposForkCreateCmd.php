<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ReposForkCreateCmd extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $gitGroup;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var bool
     */
    public $visible;
    protected $_name = [
        'companyId' => 'companyId',
        'gitGroup' => 'gitGroup',
        'marketId' => 'marketId',
        'pbcId' => 'pbcId',
        'usage' => 'usage',
        'visible' => 'visible',
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

        if (null !== $this->gitGroup) {
            $res['gitGroup'] = $this->gitGroup;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        if (null !== $this->visible) {
            $res['visible'] = $this->visible;
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

        if (isset($map['gitGroup'])) {
            $model->gitGroup = $map['gitGroup'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        if (isset($map['visible'])) {
            $model->visible = $map['visible'];
        }

        return $model;
    }
}
