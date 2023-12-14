<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SearchManualDagNodeInstanceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SearchManualDagNodeInstanceResponseBody\data\nodeInsInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var nodeInsInfo[]
     */
    public $nodeInsInfo;
    protected $_name = [
        'nodeInsInfo' => 'NodeInsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInsInfo) {
            $res['NodeInsInfo'] = [];
            if (null !== $this->nodeInsInfo && \is_array($this->nodeInsInfo)) {
                $n = 0;
                foreach ($this->nodeInsInfo as $item) {
                    $res['NodeInsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInsInfo'])) {
            if (!empty($map['NodeInsInfo'])) {
                $model->nodeInsInfo = [];
                $n                  = 0;
                foreach ($map['NodeInsInfo'] as $item) {
                    $model->nodeInsInfo[$n++] = null !== $item ? nodeInsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
