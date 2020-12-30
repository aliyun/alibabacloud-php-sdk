<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\memoryStats;

use AlibabaCloud\Tea\Model;

class containerData extends Model
{
    /**
     * @var int
     */
    public $pgmajFault;

    /**
     * @var int
     */
    public $pgFault;
    protected $_name = [
        'pgmajFault' => 'PgmajFault',
        'pgFault'    => 'PgFault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pgmajFault) {
            $res['PgmajFault'] = $this->pgmajFault;
        }
        if (null !== $this->pgFault) {
            $res['PgFault'] = $this->pgFault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PgmajFault'])) {
            $model->pgmajFault = $map['PgmajFault'];
        }
        if (isset($map['PgFault'])) {
            $model->pgFault = $map['PgFault'];
        }

        return $model;
    }
}
