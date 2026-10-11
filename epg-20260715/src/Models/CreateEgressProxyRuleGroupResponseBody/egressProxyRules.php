<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRuleGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRuleGroupResponseBody\egressProxyRules\postResponse;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRuleGroupResponseBody\egressProxyRules\preDns;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRuleGroupResponseBody\egressProxyRules\preRequest;

class egressProxyRules extends Model
{
    /**
     * @var postResponse[]
     */
    public $postResponse;

    /**
     * @var preDns[]
     */
    public $preDns;

    /**
     * @var preRequest[]
     */
    public $preRequest;
    protected $_name = [
        'postResponse' => 'PostResponse',
        'preDns' => 'PreDns',
        'preRequest' => 'PreRequest',
    ];

    public function validate()
    {
        if (\is_array($this->postResponse)) {
            Model::validateArray($this->postResponse);
        }
        if (\is_array($this->preDns)) {
            Model::validateArray($this->preDns);
        }
        if (\is_array($this->preRequest)) {
            Model::validateArray($this->preRequest);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postResponse) {
            if (\is_array($this->postResponse)) {
                $res['PostResponse'] = [];
                $n1 = 0;
                foreach ($this->postResponse as $item1) {
                    $res['PostResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preDns) {
            if (\is_array($this->preDns)) {
                $res['PreDns'] = [];
                $n1 = 0;
                foreach ($this->preDns as $item1) {
                    $res['PreDns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preRequest) {
            if (\is_array($this->preRequest)) {
                $res['PreRequest'] = [];
                $n1 = 0;
                foreach ($this->preRequest as $item1) {
                    $res['PreRequest'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PostResponse'])) {
            if (!empty($map['PostResponse'])) {
                $model->postResponse = [];
                $n1 = 0;
                foreach ($map['PostResponse'] as $item1) {
                    $model->postResponse[$n1] = postResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PreDns'])) {
            if (!empty($map['PreDns'])) {
                $model->preDns = [];
                $n1 = 0;
                foreach ($map['PreDns'] as $item1) {
                    $model->preDns[$n1] = preDns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PreRequest'])) {
            if (!empty($map['PreRequest'])) {
                $model->preRequest = [];
                $n1 = 0;
                foreach ($map['PreRequest'] as $item1) {
                    $model->preRequest[$n1] = preRequest::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
