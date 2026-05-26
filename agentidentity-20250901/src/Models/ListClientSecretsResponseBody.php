<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListClientSecretsResponseBody\clientSecrets;

class ListClientSecretsResponseBody extends Model
{
    /**
     * @var clientSecrets[]
     */
    public $clientSecrets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientSecrets' => 'ClientSecrets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clientSecrets)) {
            Model::validateArray($this->clientSecrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientSecrets) {
            if (\is_array($this->clientSecrets)) {
                $res['ClientSecrets'] = [];
                $n1 = 0;
                foreach ($this->clientSecrets as $item1) {
                    $res['ClientSecrets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientSecrets'])) {
            if (!empty($map['ClientSecrets'])) {
                $model->clientSecrets = [];
                $n1 = 0;
                foreach ($map['ClientSecrets'] as $item1) {
                    $model->clientSecrets[$n1] = clientSecrets::fromMap($item1);
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
