<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsResponseBody\remediationDeleteResults;

class DeleteAggregateRemediationsResponseBody extends Model
{
    /**
     * @var remediationDeleteResults[]
     */
    public $remediationDeleteResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationDeleteResults' => 'RemediationDeleteResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->remediationDeleteResults)) {
            Model::validateArray($this->remediationDeleteResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediationDeleteResults) {
            if (\is_array($this->remediationDeleteResults)) {
                $res['RemediationDeleteResults'] = [];
                $n1 = 0;
                foreach ($this->remediationDeleteResults as $item1) {
                    $res['RemediationDeleteResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RemediationDeleteResults'])) {
            if (!empty($map['RemediationDeleteResults'])) {
                $model->remediationDeleteResults = [];
                $n1 = 0;
                foreach ($map['RemediationDeleteResults'] as $item1) {
                    $model->remediationDeleteResults[$n1] = remediationDeleteResults::fromMap($item1);
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
