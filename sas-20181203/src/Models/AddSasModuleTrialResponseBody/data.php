<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddSasModuleTrialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddSasModuleTrialResponseBody\data\trialRecordList;

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
        if (\is_array($this->trialRecordList)) {
            Model::validateArray($this->trialRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trialRecordList) {
            if (\is_array($this->trialRecordList)) {
                $res['TrialRecordList'] = [];
                $n1 = 0;
                foreach ($this->trialRecordList as $item1) {
                    $res['TrialRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['TrialRecordList'])) {
            if (!empty($map['TrialRecordList'])) {
                $model->trialRecordList = [];
                $n1 = 0;
                foreach ($map['TrialRecordList'] as $item1) {
                    $model->trialRecordList[$n1] = trialRecordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
