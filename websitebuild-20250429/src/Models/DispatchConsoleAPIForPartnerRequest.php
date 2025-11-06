<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class DispatchConsoleAPIForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $liveToken;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $siteHost;
    protected $_name = [
        'liveToken' => 'LiveToken',
        'operation' => 'Operation',
        'params' => 'Params',
        'product' => 'Product',
        'siteHost' => 'SiteHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveToken) {
            $res['LiveToken'] = $this->liveToken;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->siteHost) {
            $res['SiteHost'] = $this->siteHost;
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
        if (isset($map['LiveToken'])) {
            $model->liveToken = $map['LiveToken'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['SiteHost'])) {
            $model->siteHost = $map['SiteHost'];
        }

        return $model;
    }
}
