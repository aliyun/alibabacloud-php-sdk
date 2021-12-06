<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveCountSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class resolveSummary extends Model
{
    /**
     * @var int
     */
    public $http;

    /**
     * @var int
     */
    public $http6;

    /**
     * @var int
     */
    public $https;

    /**
     * @var int
     */
    public $https6;
    protected $_name = [
        'http'   => 'Http',
        'http6'  => 'Http6',
        'https'  => 'Https',
        'https6' => 'Https6',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->http) {
            $res['Http'] = $this->http;
        }
        if (null !== $this->http6) {
            $res['Http6'] = $this->http6;
        }
        if (null !== $this->https) {
            $res['Https'] = $this->https;
        }
        if (null !== $this->https6) {
            $res['Https6'] = $this->https6;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resolveSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Http'])) {
            $model->http = $map['Http'];
        }
        if (isset($map['Http6'])) {
            $model->http6 = $map['Http6'];
        }
        if (isset($map['Https'])) {
            $model->https = $map['Https'];
        }
        if (isset($map['Https6'])) {
            $model->https6 = $map['Https6'];
        }

        return $model;
    }
}
