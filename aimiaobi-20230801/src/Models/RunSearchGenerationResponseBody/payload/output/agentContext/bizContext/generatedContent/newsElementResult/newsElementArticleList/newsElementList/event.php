<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\newsElementList;

use AlibabaCloud\Dara\Model;

class event extends Model
{
    /**
     * @var string[]
     */
    public $causeList;

    /**
     * @var string[]
     */
    public $processList;

    /**
     * @var string[]
     */
    public $resultList;
    protected $_name = [
        'causeList' => 'CauseList',
        'processList' => 'ProcessList',
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
        if (\is_array($this->causeList)) {
            Model::validateArray($this->causeList);
        }
        if (\is_array($this->processList)) {
            Model::validateArray($this->processList);
        }
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->causeList) {
            if (\is_array($this->causeList)) {
                $res['CauseList'] = [];
                $n1 = 0;
                foreach ($this->causeList as $item1) {
                    $res['CauseList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->processList) {
            if (\is_array($this->processList)) {
                $res['ProcessList'] = [];
                $n1 = 0;
                foreach ($this->processList as $item1) {
                    $res['ProcessList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1++] = $item1;
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
        if (isset($map['CauseList'])) {
            if (!empty($map['CauseList'])) {
                $model->causeList = [];
                $n1 = 0;
                foreach ($map['CauseList'] as $item1) {
                    $model->causeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProcessList'])) {
            if (!empty($map['ProcessList'])) {
                $model->processList = [];
                $n1 = 0;
                foreach ($map['ProcessList'] as $item1) {
                    $model->processList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
