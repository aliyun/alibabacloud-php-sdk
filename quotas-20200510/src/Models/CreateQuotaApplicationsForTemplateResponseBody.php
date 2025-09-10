<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateResponseBody\failResults;

class CreateQuotaApplicationsForTemplateResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @var failResults[]
     */
    public $failResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliyunUids' => 'AliyunUids',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'failResults' => 'FailResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunUids)) {
            Model::validateArray($this->aliyunUids);
        }
        if (\is_array($this->failResults)) {
            Model::validateArray($this->failResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUids) {
            if (\is_array($this->aliyunUids)) {
                $res['AliyunUids'] = [];
                $n1 = 0;
                foreach ($this->aliyunUids as $item1) {
                    $res['AliyunUids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->batchQuotaApplicationId) {
            $res['BatchQuotaApplicationId'] = $this->batchQuotaApplicationId;
        }

        if (null !== $this->failResults) {
            if (\is_array($this->failResults)) {
                $res['FailResults'] = [];
                $n1 = 0;
                foreach ($this->failResults as $item1) {
                    $res['FailResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AliyunUids'])) {
            if (!empty($map['AliyunUids'])) {
                $model->aliyunUids = [];
                $n1 = 0;
                foreach ($map['AliyunUids'] as $item1) {
                    $model->aliyunUids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BatchQuotaApplicationId'])) {
            $model->batchQuotaApplicationId = $map['BatchQuotaApplicationId'];
        }

        if (isset($map['FailResults'])) {
            if (!empty($map['FailResults'])) {
                $model->failResults = [];
                $n1 = 0;
                foreach ($map['FailResults'] as $item1) {
                    $model->failResults[$n1] = failResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
