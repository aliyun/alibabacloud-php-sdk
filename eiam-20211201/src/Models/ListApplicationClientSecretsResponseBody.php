<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsResponseBody\applicationClientSecrets;
use AlibabaCloud\Tea\Model;

class ListApplicationClientSecretsResponseBody extends Model
{
    /**
     * @description The information about the client keys.
     *
     * @var applicationClientSecrets[]
     */
    public $applicationClientSecrets;

    /**
     * @description The ID of the request.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applicationClientSecrets' => 'ApplicationClientSecrets',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationClientSecrets) {
            $res['ApplicationClientSecrets'] = [];
            if (null !== $this->applicationClientSecrets && \is_array($this->applicationClientSecrets)) {
                $n = 0;
                foreach ($this->applicationClientSecrets as $item) {
                    $res['ApplicationClientSecrets'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListApplicationClientSecretsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationClientSecrets'])) {
            if (!empty($map['ApplicationClientSecrets'])) {
                $model->applicationClientSecrets = [];
                $n                               = 0;
                foreach ($map['ApplicationClientSecrets'] as $item) {
                    $model->applicationClientSecrets[$n++] = null !== $item ? applicationClientSecrets::fromMap($item) : $item;
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
