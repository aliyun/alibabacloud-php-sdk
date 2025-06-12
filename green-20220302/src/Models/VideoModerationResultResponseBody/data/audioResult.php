<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult\audioSummarys;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult\sliceDetails;

class audioResult extends Model
{
    /**
     * @var audioSummarys[]
     */
    public $audioSummarys;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var sliceDetails[]
     */
    public $sliceDetails;
    protected $_name = [
        'audioSummarys' => 'AudioSummarys',
        'riskLevel' => 'RiskLevel',
        'sliceDetails' => 'SliceDetails',
    ];

    public function validate()
    {
        if (\is_array($this->audioSummarys)) {
            Model::validateArray($this->audioSummarys);
        }
        if (\is_array($this->sliceDetails)) {
            Model::validateArray($this->sliceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSummarys) {
            if (\is_array($this->audioSummarys)) {
                $res['AudioSummarys'] = [];
                $n1 = 0;
                foreach ($this->audioSummarys as $item1) {
                    $res['AudioSummarys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sliceDetails) {
            if (\is_array($this->sliceDetails)) {
                $res['SliceDetails'] = [];
                $n1 = 0;
                foreach ($this->sliceDetails as $item1) {
                    $res['SliceDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioSummarys'])) {
            if (!empty($map['AudioSummarys'])) {
                $model->audioSummarys = [];
                $n1 = 0;
                foreach ($map['AudioSummarys'] as $item1) {
                    $model->audioSummarys[$n1++] = audioSummarys::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SliceDetails'])) {
            if (!empty($map['SliceDetails'])) {
                $model->sliceDetails = [];
                $n1 = 0;
                foreach ($map['SliceDetails'] as $item1) {
                    $model->sliceDetails[$n1++] = sliceDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
