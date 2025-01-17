<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventLevelCountResponseBody;

use AlibabaCloud\Dara\Model;

class eventLevels extends Model
{
    /**
     * @var int
     */
    public $remind;
    /**
     * @var int
     */
    public $serious;
    /**
     * @var int
     */
    public $suspicious;
    protected $_name = [
        'remind'     => 'Remind',
        'serious'    => 'Serious',
        'suspicious' => 'Suspicious',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remind) {
            $res['Remind'] = $this->remind;
        }

        if (null !== $this->serious) {
            $res['Serious'] = $this->serious;
        }

        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
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
        if (isset($map['Remind'])) {
            $model->remind = $map['Remind'];
        }

        if (isset($map['Serious'])) {
            $model->serious = $map['Serious'];
        }

        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
        }

        return $model;
    }
}
