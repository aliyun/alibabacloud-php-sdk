<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Dara\Model;

class uncertaintyValues extends Model
{
    /**
     * @var string
     */
    public $inventory;
    /**
     * @var string
     */
    public $uncertaintyContribution;
    protected $_name = [
        'inventory'               => 'inventory',
        'uncertaintyContribution' => 'uncertaintyContribution',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }

        if (null !== $this->uncertaintyContribution) {
            $res['uncertaintyContribution'] = $this->uncertaintyContribution;
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
        if (isset($map['inventory'])) {
            $model->inventory = $map['inventory'];
        }

        if (isset($map['uncertaintyContribution'])) {
            $model->uncertaintyContribution = $map['uncertaintyContribution'];
        }

        return $model;
    }
}
