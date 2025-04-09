<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeDialogueNodeStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class hangUpDialogueNodes extends Model
{
    /**
     * @var int
     */
    public $hangUpNum;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $rateDisplay;
    protected $_name = [
        'hangUpNum' => 'HangUpNum',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'rateDisplay' => 'RateDisplay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hangUpNum) {
            $res['HangUpNum'] = $this->hangUpNum;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->rateDisplay) {
            $res['RateDisplay'] = $this->rateDisplay;
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
        if (isset($map['HangUpNum'])) {
            $model->hangUpNum = $map['HangUpNum'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['RateDisplay'])) {
            $model->rateDisplay = $map['RateDisplay'];
        }

        return $model;
    }
}
