<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportsResponseBody\items\item\QPSTopNItems;

use AlibabaCloud\Tea\Model;

class QPSTopNItem extends Model
{
    /**
     * @var int
     */
    public $SQLExecuteTimes;

    /**
     * @var string
     */
    public $SQLText;
    protected $_name = [
        'SQLExecuteTimes' => 'SQLExecuteTimes',
        'SQLText'         => 'SQLText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLExecuteTimes) {
            $res['SQLExecuteTimes'] = $this->SQLExecuteTimes;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QPSTopNItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLExecuteTimes'])) {
            $model->SQLExecuteTimes = $map['SQLExecuteTimes'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        return $model;
    }
}
