<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult\labelResult;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult\location;
use AlibabaCloud\Tea\Model;

class imageResult extends Model
{
    /**
     * @description The description.
     *
     * @example This is a title.
     *
     * @var string
     */
    public $description;

    /**
     * @description The label information.
     *
     * @var labelResult[]
     */
    public $labelResult;

    /**
     * @description The location information
     *
     * @var location
     */
    public $location;

    /**
     * @description Risk Level
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The moderation service.
     *
     * @example baselineCheck
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'description' => 'Description',
        'labelResult' => 'LabelResult',
        'location'    => 'Location',
        'riskLevel'   => 'RiskLevel',
        'service'     => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labelResult) {
            $res['LabelResult'] = [];
            if (null !== $this->labelResult && \is_array($this->labelResult)) {
                $n = 0;
                foreach ($this->labelResult as $item) {
                    $res['LabelResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LabelResult'])) {
            if (!empty($map['LabelResult'])) {
                $model->labelResult = [];
                $n                  = 0;
                foreach ($map['LabelResult'] as $item) {
                    $model->labelResult[$n++] = null !== $item ? labelResult::fromMap($item) : $item;
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
