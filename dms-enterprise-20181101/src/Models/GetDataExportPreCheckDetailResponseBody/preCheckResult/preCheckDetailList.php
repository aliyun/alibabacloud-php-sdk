<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult\preCheckDetailList\preCheckDetailList;

class preCheckDetailList extends Model
{
    /**
     * @var preCheckDetailList[]
     */
    public $preCheckDetailList;
    protected $_name = [
        'preCheckDetailList' => 'PreCheckDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->preCheckDetailList)) {
            Model::validateArray($this->preCheckDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheckDetailList) {
            if (\is_array($this->preCheckDetailList)) {
                $res['PreCheckDetailList'] = [];
                $n1                        = 0;
                foreach ($this->preCheckDetailList as $item1) {
                    $res['PreCheckDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PreCheckDetailList'])) {
            if (!empty($map['PreCheckDetailList'])) {
                $model->preCheckDetailList = [];
                $n1                        = 0;
                foreach ($map['PreCheckDetailList'] as $item1) {
                    $model->preCheckDetailList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
