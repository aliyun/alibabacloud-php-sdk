<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult\labelResult;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult\location;

class imageResult extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var labelResult[]
     */
    public $labelResult;

    /**
     * @var location
     */
    public $location;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'description' => 'Description',
        'labelResult' => 'LabelResult',
        'location' => 'Location',
        'riskLevel' => 'RiskLevel',
        'service' => 'Service',
    ];

    public function validate()
    {
        if (\is_array($this->labelResult)) {
            Model::validateArray($this->labelResult);
        }
        if (null !== $this->location) {
            $this->location->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->labelResult) {
            if (\is_array($this->labelResult)) {
                $res['LabelResult'] = [];
                $n1 = 0;
                foreach ($this->labelResult as $item1) {
                    $res['LabelResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LabelResult'])) {
            if (!empty($map['LabelResult'])) {
                $model->labelResult = [];
                $n1 = 0;
                foreach ($map['LabelResult'] as $item1) {
                    $model->labelResult[$n1++] = labelResult::fromMap($item1);
                }
            }
        }

        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
