<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class TraceSiteShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyShrink;

    /**
     * @var string
     */
    public $contextShrink;

    /**
     * @var string
     */
    public $cookiesShrink;

    /**
     * @var string
     */
    public $headersShrink;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'bodyShrink' => 'Body',
        'contextShrink' => 'Context',
        'cookiesShrink' => 'Cookies',
        'headersShrink' => 'Headers',
        'method' => 'Method',
        'protocol' => 'Protocol',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyShrink) {
            $res['Body'] = $this->bodyShrink;
        }

        if (null !== $this->contextShrink) {
            $res['Context'] = $this->contextShrink;
        }

        if (null !== $this->cookiesShrink) {
            $res['Cookies'] = $this->cookiesShrink;
        }

        if (null !== $this->headersShrink) {
            $res['Headers'] = $this->headersShrink;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Body'])) {
            $model->bodyShrink = $map['Body'];
        }

        if (isset($map['Context'])) {
            $model->contextShrink = $map['Context'];
        }

        if (isset($map['Cookies'])) {
            $model->cookiesShrink = $map['Cookies'];
        }

        if (isset($map['Headers'])) {
            $model->headersShrink = $map['Headers'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
