<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\ExchangeEntitlementResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ExchangeEntitlementResponseBody\data\template;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $effectiveAt;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $keyHash;

    /**
     * @var string
     */
    public $redemptionOrderNo;

    /**
     * @var bool
     */
    public $reused;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'apiKey' => 'apiKey',
        'effectiveAt' => 'effectiveAt',
        'endpoint' => 'endpoint',
        'expireAt' => 'expireAt',
        'keyHash' => 'keyHash',
        'redemptionOrderNo' => 'redemptionOrderNo',
        'reused' => 'reused',
        'template' => 'template',
    ];

    public function validate()
    {
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->effectiveAt) {
            $res['effectiveAt'] = $this->effectiveAt;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }

        if (null !== $this->keyHash) {
            $res['keyHash'] = $this->keyHash;
        }

        if (null !== $this->redemptionOrderNo) {
            $res['redemptionOrderNo'] = $this->redemptionOrderNo;
        }

        if (null !== $this->reused) {
            $res['reused'] = $this->reused;
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['effectiveAt'])) {
            $model->effectiveAt = $map['effectiveAt'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        if (isset($map['keyHash'])) {
            $model->keyHash = $map['keyHash'];
        }

        if (isset($map['redemptionOrderNo'])) {
            $model->redemptionOrderNo = $map['redemptionOrderNo'];
        }

        if (isset($map['reused'])) {
            $model->reused = $map['reused'];
        }

        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        return $model;
    }
}
