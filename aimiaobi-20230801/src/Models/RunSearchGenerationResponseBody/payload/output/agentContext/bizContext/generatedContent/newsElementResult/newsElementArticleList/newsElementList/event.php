<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\newsElementList;

use AlibabaCloud\Tea\Model;

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
        'causeList'   => 'CauseList',
        'processList' => 'ProcessList',
        'resultList'  => 'ResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->causeList) {
            $res['CauseList'] = $this->causeList;
        }
        if (null !== $this->processList) {
            $res['ProcessList'] = $this->processList;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = $this->resultList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CauseList'])) {
            if (!empty($map['CauseList'])) {
                $model->causeList = $map['CauseList'];
            }
        }
        if (isset($map['ProcessList'])) {
            if (!empty($map['ProcessList'])) {
                $model->processList = $map['ProcessList'];
            }
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = $map['ResultList'];
            }
        }

        return $model;
    }
}
