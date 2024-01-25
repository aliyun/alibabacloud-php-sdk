<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data\siteSurveyReport\checkList;
use AlibabaCloud\Tea\Model;

class siteSurveyReport extends Model
{
    /**
     * @var checkList[]
     */
    public $checkList;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'checkList' => 'checkList',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkList) {
            $res['checkList'] = [];
            if (null !== $this->checkList && \is_array($this->checkList)) {
                $n = 0;
                foreach ($this->checkList as $item) {
                    $res['checkList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteSurveyReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkList'])) {
            if (!empty($map['checkList'])) {
                $model->checkList = [];
                $n                = 0;
                foreach ($map['checkList'] as $item) {
                    $model->checkList[$n++] = null !== $item ? checkList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
