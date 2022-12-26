<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventLevelCountResponseBody;

use AlibabaCloud\Tea\Model;

class eventLevels extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $remind;

    /**
     * @example 0
     *
     * @var int
     */
    public $serious;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return eventLevels
     */
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
