<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Tea\Model;

class advancedInfo extends Model
{
    /**
     * @var mixed[][]
     */
    public $advancedDbProperty;
    protected $_name = [
        'advancedDbProperty' => 'AdvancedDbProperty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedDbProperty) {
            $res['AdvancedDbProperty'] = $this->advancedDbProperty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advancedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedDbProperty'])) {
            if (!empty($map['AdvancedDbProperty'])) {
                $model->advancedDbProperty = $map['AdvancedDbProperty'];
            }
        }

        return $model;
    }
}
