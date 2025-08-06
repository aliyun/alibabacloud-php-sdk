<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsResponseBody\applicationClientSecrets;

class ListApplicationClientSecretsResponseBody extends Model
{
    /**
     * @var applicationClientSecrets[]
     */
    public $applicationClientSecrets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applicationClientSecrets' => 'ApplicationClientSecrets',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->applicationClientSecrets)) {
            Model::validateArray($this->applicationClientSecrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationClientSecrets) {
            if (\is_array($this->applicationClientSecrets)) {
                $res['ApplicationClientSecrets'] = [];
                $n1 = 0;
                foreach ($this->applicationClientSecrets as $item1) {
                    $res['ApplicationClientSecrets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ApplicationClientSecrets'])) {
            if (!empty($map['ApplicationClientSecrets'])) {
                $model->applicationClientSecrets = [];
                $n1 = 0;
                foreach ($map['ApplicationClientSecrets'] as $item1) {
                    $model->applicationClientSecrets[$n1] = applicationClientSecrets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
