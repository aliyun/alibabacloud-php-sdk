<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetPromptTestResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetPromptTestResultResponseBody\result\labelDetails;

class result extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var labelDetails[]
     */
    public $labelDetails;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'content' => 'Content',
        'labelDetails' => 'LabelDetails',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->labelDetails)) {
            Model::validateArray($this->labelDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->labelDetails) {
            if (\is_array($this->labelDetails)) {
                $res['LabelDetails'] = [];
                $n1 = 0;
                foreach ($this->labelDetails as $item1) {
                    $res['LabelDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['LabelDetails'])) {
            if (!empty($map['LabelDetails'])) {
                $model->labelDetails = [];
                $n1 = 0;
                foreach ($map['LabelDetails'] as $item1) {
                    $model->labelDetails[$n1] = labelDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
