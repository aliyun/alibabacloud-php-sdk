<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcRtFlowUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $anchorFlowValue;

    /**
     * @var float
     */
    public $audienceFlowValue;

    /**
     * @var float
     */
    public $flowValue;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'anchorFlowValue'   => 'AnchorFlowValue',
        'audienceFlowValue' => 'AudienceFlowValue',
        'flowValue'         => 'FlowValue',
        'timestamp'         => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorFlowValue) {
            $res['AnchorFlowValue'] = $this->anchorFlowValue;
        }
        if (null !== $this->audienceFlowValue) {
            $res['AudienceFlowValue'] = $this->audienceFlowValue;
        }
        if (null !== $this->flowValue) {
            $res['FlowValue'] = $this->flowValue;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['AnchorFlowValue'])) {
            $model->anchorFlowValue = $map['AnchorFlowValue'];
        }
        if (isset($map['AudienceFlowValue'])) {
            $model->audienceFlowValue = $map['AudienceFlowValue'];
        }
        if (isset($map['FlowValue'])) {
            $model->flowValue = $map['FlowValue'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
