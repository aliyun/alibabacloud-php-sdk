<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListCustomDomainOutput extends Model
{
    /**
     * @var CustomDomain[]
     */
    public $customDomains;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customDomains' => 'customDomains',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
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
                $res['customDomains'] = [];
                $n1 = 0;
                foreach ($this->customDomains as $item1) {
                    $res['customDomains'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['customDomains'])) {
            if (!empty($map['customDomains'])) {
                $model->customDomains = [];
                $n1 = 0;
                foreach ($map['customDomains'] as $item1) {
                    $model->customDomains[$n1++] = CustomDomain::fromMap($item1);
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
