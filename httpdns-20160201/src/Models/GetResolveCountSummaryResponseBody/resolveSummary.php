<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveCountSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class resolveSummary extends Model
{
    /**
     * @var int
     */
    public $doh;

    /**
     * @var int
     */
    public $http;

    /**
     * @var int
     */
    public $http6;

    /**
     * @var string
     */
    public $httpAes;

    /**
     * @var int
     */
    public $https;

    /**
     * @var int
     */
    public $https6;

    /**
     * @var string
     */
    public $httpsAes;
    protected $_name = [
        'doh' => 'Doh',
        'http' => 'Http',
        'http6' => 'Http6',
        'httpAes' => 'HttpAes',
        'https' => 'Https',
        'https6' => 'Https6',
        'httpsAes' => 'HttpsAes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->doh) {
            $res['Doh'] = $this->doh;
        }

        if (null !== $this->http) {
            $res['Http'] = $this->http;
        }

        if (null !== $this->http6) {
            $res['Http6'] = $this->http6;
        }

        if (null !== $this->httpAes) {
            $res['HttpAes'] = $this->httpAes;
        }

        if (null !== $this->https) {
            $res['Https'] = $this->https;
        }

        if (null !== $this->https6) {
            $res['Https6'] = $this->https6;
        }

        if (null !== $this->httpsAes) {
            $res['HttpsAes'] = $this->httpsAes;
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
        if (isset($map['Doh'])) {
            $model->doh = $map['Doh'];
        }

        if (isset($map['Http'])) {
            $model->http = $map['Http'];
        }

        if (isset($map['Http6'])) {
            $model->http6 = $map['Http6'];
        }

        if (isset($map['HttpAes'])) {
            $model->httpAes = $map['HttpAes'];
        }

        if (isset($map['Https'])) {
            $model->https = $map['Https'];
        }

        if (isset($map['Https6'])) {
            $model->https6 = $map['Https6'];
        }

        if (isset($map['HttpsAes'])) {
            $model->httpsAes = $map['HttpsAes'];
        }

        return $model;
    }
}
