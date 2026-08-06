<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageSummaryResponseBody\records;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageSummaryResponseBody\summary;

class DescribeMOTokenUsageSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @var string
     */
    public $usageType;
    protected $_name = [
        'message' => 'Message',
        'records' => 'Records',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'summary' => 'Summary',
        'usageType' => 'UsageType',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        return $model;
    }
}
