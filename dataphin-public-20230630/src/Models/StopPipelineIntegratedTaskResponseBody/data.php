<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\StopPipelineIntegratedTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\StopPipelineIntegratedTaskResponseBody\data\devOpsActionResDTOList;

class data extends Model
{
    /**
     * @var devOpsActionResDTOList[]
     */
    public $devOpsActionResDTOList;

    /**
     * @var int
     */
    public $fail;

    /**
     * @var int
     */
    public $success;
    protected $_name = [
        'devOpsActionResDTOList' => 'DevOpsActionResDTOList',
        'fail' => 'Fail',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->devOpsActionResDTOList)) {
            Model::validateArray($this->devOpsActionResDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devOpsActionResDTOList) {
            if (\is_array($this->devOpsActionResDTOList)) {
                $res['DevOpsActionResDTOList'] = [];
                $n1 = 0;
                foreach ($this->devOpsActionResDTOList as $item1) {
                    $res['DevOpsActionResDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['DevOpsActionResDTOList'])) {
            if (!empty($map['DevOpsActionResDTOList'])) {
                $model->devOpsActionResDTOList = [];
                $n1 = 0;
                foreach ($map['DevOpsActionResDTOList'] as $item1) {
                    $model->devOpsActionResDTOList[$n1] = devOpsActionResDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
