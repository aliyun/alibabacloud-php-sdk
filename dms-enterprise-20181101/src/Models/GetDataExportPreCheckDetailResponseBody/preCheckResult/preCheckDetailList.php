<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult;

use AlibabaCloud\Tea\Model;

class preCheckDetailList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult\preCheckDetailList\preCheckDetailList[]
     */
    public $preCheckDetailList;
    protected $_name = [
        'preCheckDetailList' => 'PreCheckDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckDetailList) {
            $res['PreCheckDetailList'] = [];
            if (null !== $this->preCheckDetailList && \is_array($this->preCheckDetailList)) {
                $n = 0;
                foreach ($this->preCheckDetailList as $item) {
                    $res['PreCheckDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckDetailList'])) {
            if (!empty($map['PreCheckDetailList'])) {
                $model->preCheckDetailList = [];
                $n                         = 0;
                foreach ($map['PreCheckDetailList'] as $item) {
                    $model->preCheckDetailList[$n++] = null !== $item ? \AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult\preCheckDetailList\preCheckDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
