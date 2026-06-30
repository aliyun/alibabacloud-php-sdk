<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\serviceInspectionResponse\serviceInspectionVoList;

class serviceInspectionResponse extends Model
{
    /**
     * @var serviceInspectionVoList[]
     */
    public $serviceInspectionVoList;
    protected $_name = [
        'serviceInspectionVoList' => 'ServiceInspectionVoList',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInspectionVoList)) {
            Model::validateArray($this->serviceInspectionVoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceInspectionVoList) {
            if (\is_array($this->serviceInspectionVoList)) {
                $res['ServiceInspectionVoList'] = [];
                $n1 = 0;
                foreach ($this->serviceInspectionVoList as $item1) {
                    $res['ServiceInspectionVoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceInspectionVoList'])) {
            if (!empty($map['ServiceInspectionVoList'])) {
                $model->serviceInspectionVoList = [];
                $n1 = 0;
                foreach ($map['ServiceInspectionVoList'] as $item1) {
                    $model->serviceInspectionVoList[$n1] = serviceInspectionVoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
