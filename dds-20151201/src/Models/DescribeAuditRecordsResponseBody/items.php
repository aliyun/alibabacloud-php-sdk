<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponseBody\items\SQLRecord;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var SQLRecord[]
     */
    public $SQLRecord;
    protected $_name = [
        'SQLRecord' => 'SQLRecord',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLRecord) {
            $res['SQLRecord'] = [];
            if (null !== $this->SQLRecord && \is_array($this->SQLRecord)) {
                $n = 0;
                foreach ($this->SQLRecord as $item) {
                    $res['SQLRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLRecord'])) {
            if (!empty($map['SQLRecord'])) {
                $model->SQLRecord = [];
                $n = 0;
                foreach ($map['SQLRecord'] as $item) {
                    $model->SQLRecord[$n++] = null !== $item ? SQLRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
