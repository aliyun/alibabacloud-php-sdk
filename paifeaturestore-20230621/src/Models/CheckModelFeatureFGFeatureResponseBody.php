<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckModelFeatureFGFeatureResponseBody\FGCheckResults;
use AlibabaCloud\Tea\Model;

class CheckModelFeatureFGFeatureResponseBody extends Model
{
    /**
     * @var FGCheckResults[]
     */
    public $FGCheckResults;

    /**
     * @example ED4DEA2F-F216-57F0-AE28-08D791233280
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'FGCheckResults' => 'FGCheckResults',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->FGCheckResults) {
            $res['FGCheckResults'] = [];
            if (null !== $this->FGCheckResults && \is_array($this->FGCheckResults)) {
                $n = 0;
                foreach ($this->FGCheckResults as $item) {
                    $res['FGCheckResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckModelFeatureFGFeatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FGCheckResults'])) {
            if (!empty($map['FGCheckResults'])) {
                $model->FGCheckResults = [];
                $n = 0;
                foreach ($map['FGCheckResults'] as $item) {
                    $model->FGCheckResults[$n++] = null !== $item ? FGCheckResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
