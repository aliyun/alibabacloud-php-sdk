<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\logs;

use AlibabaCloud\Tea\Model;

class checkList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\logs\checkList\checkList[]
     */
    public $checkList;
    protected $_name = [
        'checkList' => 'CheckList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkList) {
            $res['CheckList'] = [];
            if (null !== $this->checkList && \is_array($this->checkList)) {
                $n = 0;
                foreach ($this->checkList as $item) {
                    $res['CheckList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckList'])) {
            if (!empty($map['CheckList'])) {
                $model->checkList = [];
                $n                = 0;
                foreach ($map['CheckList'] as $item) {
                    $model->checkList[$n++] = null !== $item ? \AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\logs\checkList\checkList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
