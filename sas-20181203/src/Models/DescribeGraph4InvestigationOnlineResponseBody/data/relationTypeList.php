<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Dara\Model;

class relationTypeList extends Model
{
    /**
     * @var int
     */
    public $directed;

    /**
     * @var string
     */
    public $displayColor;

    /**
     * @var string
     */
    public $displayIcon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'directed' => 'Directed',
        'displayColor' => 'DisplayColor',
        'displayIcon' => 'DisplayIcon',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
        }

        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }

        if (null !== $this->displayIcon) {
            $res['DisplayIcon'] = $this->displayIcon;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }

        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }

        if (isset($map['DisplayIcon'])) {
            $model->displayIcon = $map['DisplayIcon'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
