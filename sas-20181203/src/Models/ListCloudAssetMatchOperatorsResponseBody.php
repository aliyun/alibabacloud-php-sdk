<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetMatchOperatorsResponseBody\matchTypeOperators;

class ListCloudAssetMatchOperatorsResponseBody extends Model
{
    /**
     * @var matchTypeOperators[]
     */
    public $matchTypeOperators;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'matchTypeOperators' => 'MatchTypeOperators',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->matchTypeOperators)) {
            Model::validateArray($this->matchTypeOperators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchTypeOperators) {
            if (\is_array($this->matchTypeOperators)) {
                $res['MatchTypeOperators'] = [];
                $n1 = 0;
                foreach ($this->matchTypeOperators as $item1) {
                    $res['MatchTypeOperators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchTypeOperators'])) {
            if (!empty($map['MatchTypeOperators'])) {
                $model->matchTypeOperators = [];
                $n1 = 0;
                foreach ($map['MatchTypeOperators'] as $item1) {
                    $model->matchTypeOperators[$n1] = matchTypeOperators::fromMap($item1);
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

        return $model;
    }
}
