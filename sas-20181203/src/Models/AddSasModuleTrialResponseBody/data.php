<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddSasModuleTrialResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddSasModuleTrialResponseBody\data\trialRecordList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var trialRecordList[]
     */
    public $trialRecordList;
    protected $_name = [
        'trialRecordList' => 'TrialRecordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trialRecordList) {
            $res['TrialRecordList'] = [];
            if (null !== $this->trialRecordList && \is_array($this->trialRecordList)) {
                $n = 0;
                foreach ($this->trialRecordList as $item) {
                    $res['TrialRecordList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TrialRecordList'])) {
            if (!empty($map['TrialRecordList'])) {
                $model->trialRecordList = [];
                $n                      = 0;
                foreach ($map['TrialRecordList'] as $item) {
                    $model->trialRecordList[$n++] = null !== $item ? trialRecordList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
