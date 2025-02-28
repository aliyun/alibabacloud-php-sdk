<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponseBody\collationTimeZones\collationTimeZone;

class collationTimeZones extends Model
{
    /**
     * @var collationTimeZone[]
     */
    public $collationTimeZone;
    protected $_name = [
        'collationTimeZone' => 'CollationTimeZone',
    ];

    public function validate()
    {
        if (\is_array($this->collationTimeZone)) {
            Model::validateArray($this->collationTimeZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collationTimeZone) {
            if (\is_array($this->collationTimeZone)) {
                $res['CollationTimeZone'] = [];
                $n1                       = 0;
                foreach ($this->collationTimeZone as $item1) {
                    $res['CollationTimeZone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CollationTimeZone'])) {
            if (!empty($map['CollationTimeZone'])) {
                $model->collationTimeZone = [];
                $n1                       = 0;
                foreach ($map['CollationTimeZone'] as $item1) {
                    $model->collationTimeZone[$n1++] = collationTimeZone::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
