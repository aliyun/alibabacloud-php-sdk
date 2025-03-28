<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList;

class data extends Model
{
    /**
     * @var dialogAnalysisRespList[]
     */
    public $dialogAnalysisRespList;
    protected $_name = [
        'dialogAnalysisRespList' => 'dialogAnalysisRespList',
    ];

    public function validate()
    {
        if (\is_array($this->dialogAnalysisRespList)) {
            Model::validateArray($this->dialogAnalysisRespList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogAnalysisRespList) {
            if (\is_array($this->dialogAnalysisRespList)) {
                $res['dialogAnalysisRespList'] = [];
                $n1 = 0;
                foreach ($this->dialogAnalysisRespList as $item1) {
                    $res['dialogAnalysisRespList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dialogAnalysisRespList'])) {
            if (!empty($map['dialogAnalysisRespList'])) {
                $model->dialogAnalysisRespList = [];
                $n1 = 0;
                foreach ($map['dialogAnalysisRespList'] as $item1) {
                    $model->dialogAnalysisRespList[$n1++] = dialogAnalysisRespList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
