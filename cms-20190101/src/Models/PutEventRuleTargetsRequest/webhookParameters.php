<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class webhookParameters extends Model
{
    /**
     * @description The ID of the recipient that receives alert notifications. Valid values of N: 1 to 5.
     *
     * @example 4
     *
     * @var string
     */
    public $id;

    /**
     * @description The HTTP request method. Valid values of N: 1 to 5.
     *
     * Valid values: GET and POST.
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The name of the protocol. Valid values of N: 1 to 5. Valid values:
     *
     *   http
     *   telnet
     *   ping
     *
     * @example http
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The callback URL. Valid values of N: 1 to 5.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'id'       => 'Id',
        'method'   => 'Method',
        'protocol' => 'Protocol',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

    /**
     * @param array $map
     *
     * @return webhookParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
