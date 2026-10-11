<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyConfigurationAttributeRequest;

use AlibabaCloud\Dara\Model;

class defaultRulePhaseActions extends Model
{
    /**
     * @var string
     */
    public $postResponse;

    /**
     * @var string
     */
    public $preDns;

    /**
     * @var string
     */
    public $preRequest;
    protected $_name = [
        'postResponse' => 'PostResponse',
        'preDns' => 'PreDns',
        'preRequest' => 'PreRequest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postResponse) {
            $res['PostResponse'] = $this->postResponse;
        }

        if (null !== $this->preDns) {
            $res['PreDns'] = $this->preDns;
        }

        if (null !== $this->preRequest) {
            $res['PreRequest'] = $this->preRequest;
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
            $model->postResponse = $map['PostResponse'];
        }

        if (isset($map['PreDns'])) {
            $model->preDns = $map['PreDns'];
        }

        if (isset($map['PreRequest'])) {
            $model->preRequest = $map['PreRequest'];
        }

        return $model;
    }
}
