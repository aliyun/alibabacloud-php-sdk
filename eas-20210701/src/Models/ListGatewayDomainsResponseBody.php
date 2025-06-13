<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayDomainsResponseBody\customDomains;

class ListGatewayDomainsResponseBody extends Model
{
    /**
     * @var customDomains[]
     */
    public $customDomains;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customDomains' => 'CustomDomains',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->customDomains)) {
            Model::validateArray($this->customDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customDomains) {
            if (\is_array($this->customDomains)) {
                $res['CustomDomains'] = [];
                $n1 = 0;
                foreach ($this->customDomains as $item1) {
                    $res['CustomDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['CustomDomains'])) {
            if (!empty($map['CustomDomains'])) {
                $model->customDomains = [];
                $n1 = 0;
                foreach ($map['CustomDomains'] as $item1) {
                    $model->customDomains[$n1] = customDomains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
