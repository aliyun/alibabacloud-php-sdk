<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckModelFeatureFGFeatureResponseBody\FGCheckResults;

class CheckModelFeatureFGFeatureResponseBody extends Model
{
    /**
     * @var FGCheckResults[]
     */
    public $FGCheckResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'FGCheckResults' => 'FGCheckResults',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->FGCheckResults)) {
            Model::validateArray($this->FGCheckResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->FGCheckResults) {
            if (\is_array($this->FGCheckResults)) {
                $res['FGCheckResults'] = [];
                $n1 = 0;
                foreach ($this->FGCheckResults as $item1) {
                    $res['FGCheckResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['FGCheckResults'])) {
            if (!empty($map['FGCheckResults'])) {
                $model->FGCheckResults = [];
                $n1 = 0;
                foreach ($map['FGCheckResults'] as $item1) {
                    $model->FGCheckResults[$n1] = FGCheckResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
