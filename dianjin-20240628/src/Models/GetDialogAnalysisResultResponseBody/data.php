<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogAnalysisRespList) {
            $res['dialogAnalysisRespList'] = [];
            if (null !== $this->dialogAnalysisRespList && \is_array($this->dialogAnalysisRespList)) {
                $n = 0;
                foreach ($this->dialogAnalysisRespList as $item) {
                    $res['dialogAnalysisRespList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['dialogAnalysisRespList'])) {
            if (!empty($map['dialogAnalysisRespList'])) {
                $model->dialogAnalysisRespList = [];
                $n                             = 0;
                foreach ($map['dialogAnalysisRespList'] as $item) {
                    $model->dialogAnalysisRespList[$n++] = null !== $item ? dialogAnalysisRespList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
