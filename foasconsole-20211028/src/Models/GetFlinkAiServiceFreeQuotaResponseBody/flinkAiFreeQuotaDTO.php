<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\GetFlinkAiServiceFreeQuotaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\GetFlinkAiServiceFreeQuotaResponseBody\flinkAiFreeQuotaDTO\usedQuotaDetails;

class flinkAiFreeQuotaDTO extends Model
{
    /**
     * @var float
     */
    public $freeQuota;

    /**
     * @var usedQuotaDetails[]
     */
    public $usedQuotaDetails;
    protected $_name = [
        'freeQuota' => 'FreeQuota',
        'usedQuotaDetails' => 'UsedQuotaDetails',
    ];

    public function validate()
    {
        if (\is_array($this->usedQuotaDetails)) {
            Model::validateArray($this->usedQuotaDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->freeQuota) {
            $res['FreeQuota'] = $this->freeQuota;
        }

        if (null !== $this->usedQuotaDetails) {
            if (\is_array($this->usedQuotaDetails)) {
                $res['UsedQuotaDetails'] = [];
                $n1 = 0;
                foreach ($this->usedQuotaDetails as $item1) {
                    $res['UsedQuotaDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FreeQuota'])) {
            $model->freeQuota = $map['FreeQuota'];
        }

        if (isset($map['UsedQuotaDetails'])) {
            if (!empty($map['UsedQuotaDetails'])) {
                $model->usedQuotaDetails = [];
                $n1 = 0;
                foreach ($map['UsedQuotaDetails'] as $item1) {
                    $model->usedQuotaDetails[$n1] = usedQuotaDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
