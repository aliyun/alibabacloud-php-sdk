<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\deployRecordList\deployRecord;
use AlibabaCloud\Tea\Model;

class deployRecordList extends Model
{
    /**
     * @var deployRecord[]
     */
    public $deployRecord;
    protected $_name = [
        'deployRecord' => 'DeployRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployRecord) {
            $res['DeployRecord'] = [];
            if (null !== $this->deployRecord && \is_array($this->deployRecord)) {
                $n = 0;
                foreach ($this->deployRecord as $item) {
                    $res['DeployRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployRecordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployRecord'])) {
            if (!empty($map['DeployRecord'])) {
                $model->deployRecord = [];
                $n                   = 0;
                foreach ($map['DeployRecord'] as $item) {
                    $model->deployRecord[$n++] = null !== $item ? deployRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
