<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class LogGroupList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var LogGroup[]
     */
    public $logGroupList;
    protected $_name = [
        'logGroupList' => 'logGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logGroupList) {
            $res['logGroupList'] = [];
            if (null !== $this->logGroupList && \is_array($this->logGroupList)) {
                $n = 0;
                foreach ($this->logGroupList as $item) {
                    $res['logGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logGroupList'])) {
            if (!empty($map['logGroupList'])) {
                $model->logGroupList = [];
                $n                   = 0;
                foreach ($map['logGroupList'] as $item) {
                    $model->logGroupList[$n++] = null !== $item ? LogGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
