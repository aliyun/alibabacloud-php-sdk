<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentGroupResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentGroupResponseBody\data\list_\ctiLinkAgentGroup;

class list_ extends Model
{
    /**
     * @var string
     */
    public $childGnos;

    /**
     * @var ctiLinkAgentGroup
     */
    public $ctiLinkAgentGroup;
    protected $_name = [
        'childGnos' => 'ChildGnos',
        'ctiLinkAgentGroup' => 'CtiLinkAgentGroup',
    ];

    public function validate()
    {
        if (null !== $this->ctiLinkAgentGroup) {
            $this->ctiLinkAgentGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childGnos) {
            $res['ChildGnos'] = $this->childGnos;
        }

        if (null !== $this->ctiLinkAgentGroup) {
            $res['CtiLinkAgentGroup'] = null !== $this->ctiLinkAgentGroup ? $this->ctiLinkAgentGroup->toArray($noStream) : $this->ctiLinkAgentGroup;
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
        if (isset($map['ChildGnos'])) {
            $model->childGnos = $map['ChildGnos'];
        }

        if (isset($map['CtiLinkAgentGroup'])) {
            $model->ctiLinkAgentGroup = ctiLinkAgentGroup::fromMap($map['CtiLinkAgentGroup']);
        }

        return $model;
    }
}
