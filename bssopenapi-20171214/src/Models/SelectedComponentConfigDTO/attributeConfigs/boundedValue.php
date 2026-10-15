<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SelectedComponentConfigDTO\attributeConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SelectedComponentConfigDTO\attributeConfigs\boundedValue\lowerBound;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SelectedComponentConfigDTO\attributeConfigs\boundedValue\upperBound;

class boundedValue extends Model
{
    /**
     * @var lowerBound
     */
    public $lowerBound;

    /**
     * @var upperBound
     */
    public $upperBound;
    protected $_name = [
        'lowerBound' => 'LowerBound',
        'upperBound' => 'UpperBound',
    ];

    public function validate()
    {
        if (null !== $this->lowerBound) {
            $this->lowerBound->validate();
        }
        if (null !== $this->upperBound) {
            $this->upperBound->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lowerBound) {
            $res['LowerBound'] = null !== $this->lowerBound ? $this->lowerBound->toArray($noStream) : $this->lowerBound;
        }

        if (null !== $this->upperBound) {
            $res['UpperBound'] = null !== $this->upperBound ? $this->upperBound->toArray($noStream) : $this->upperBound;
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
        if (isset($map['LowerBound'])) {
            $model->lowerBound = lowerBound::fromMap($map['LowerBound']);
        }

        if (isset($map['UpperBound'])) {
            $model->upperBound = upperBound::fromMap($map['UpperBound']);
        }

        return $model;
    }
}
