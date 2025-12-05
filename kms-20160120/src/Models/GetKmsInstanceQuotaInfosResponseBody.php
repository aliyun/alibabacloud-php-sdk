<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceQuotaInfosResponseBody\kmsInstanceQuotaInfos;

class GetKmsInstanceQuotaInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $kmsInstanceId;

    /**
     * @var kmsInstanceQuotaInfos[]
     */
    public $kmsInstanceQuotaInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsInstanceId' => 'KmsInstanceId',
        'kmsInstanceQuotaInfos' => 'KmsInstanceQuotaInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->kmsInstanceQuotaInfos)) {
            Model::validateArray($this->kmsInstanceQuotaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }

        if (null !== $this->kmsInstanceQuotaInfos) {
            if (\is_array($this->kmsInstanceQuotaInfos)) {
                $res['KmsInstanceQuotaInfos'] = [];
                $n1 = 0;
                foreach ($this->kmsInstanceQuotaInfos as $item1) {
                    $res['KmsInstanceQuotaInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        if (isset($map['KmsInstanceQuotaInfos'])) {
            if (!empty($map['KmsInstanceQuotaInfos'])) {
                $model->kmsInstanceQuotaInfos = [];
                $n1 = 0;
                foreach ($map['KmsInstanceQuotaInfos'] as $item1) {
                    $model->kmsInstanceQuotaInfos[$n1] = kmsInstanceQuotaInfos::fromMap($item1);
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
