<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult\preCheckDetailList;

class preCheckResult extends Model
{
    /**
     * @var bool
     */
    public $ignoreAffectRows;
    /**
     * @var preCheckDetailList
     */
    public $preCheckDetailList;
    protected $_name = [
        'ignoreAffectRows'   => 'IgnoreAffectRows',
        'preCheckDetailList' => 'PreCheckDetailList',
    ];

    public function validate()
    {
        if (null !== $this->preCheckDetailList) {
            $this->preCheckDetailList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }

        if (null !== $this->preCheckDetailList) {
            $res['PreCheckDetailList'] = null !== $this->preCheckDetailList ? $this->preCheckDetailList->toArray($noStream) : $this->preCheckDetailList;
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
        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }

        if (isset($map['PreCheckDetailList'])) {
            $model->preCheckDetailList = preCheckDetailList::fromMap($map['PreCheckDetailList']);
        }

        return $model;
    }
}
