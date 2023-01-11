<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardStatusStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class singCardPeriodLeftFlowWarnDTO extends Model
{
    /**
     * @var int
     */
    public $lessFlowPercentage10Count;

    /**
     * @var int
     */
    public $lessFlowPercentage30Count;
    protected $_name = [
        'lessFlowPercentage10Count' => 'LessFlowPercentage10Count',
        'lessFlowPercentage30Count' => 'LessFlowPercentage30Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lessFlowPercentage10Count) {
            $res['LessFlowPercentage10Count'] = $this->lessFlowPercentage10Count;
        }
        if (null !== $this->lessFlowPercentage30Count) {
            $res['LessFlowPercentage30Count'] = $this->lessFlowPercentage30Count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return singCardPeriodLeftFlowWarnDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LessFlowPercentage10Count'])) {
            $model->lessFlowPercentage10Count = $map['LessFlowPercentage10Count'];
        }
        if (isset($map['LessFlowPercentage30Count'])) {
            $model->lessFlowPercentage30Count = $map['LessFlowPercentage30Count'];
        }

        return $model;
    }
}
