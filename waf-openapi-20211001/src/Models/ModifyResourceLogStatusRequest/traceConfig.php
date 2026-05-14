<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusRequest;

use AlibabaCloud\Dara\Model;

class traceConfig extends Model
{
    /**
     * @var int
     */
    public $ratePerMille;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'ratePerMille' => 'RatePerMille',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ratePerMille) {
            $res['RatePerMille'] = $this->ratePerMille;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['RatePerMille'])) {
            $model->ratePerMille = $map['RatePerMille'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
