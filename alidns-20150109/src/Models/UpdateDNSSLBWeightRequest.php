<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDNSSLBWeightRequest extends Model
{
    /**
     * @description The language of the domain name.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the DNS record.
     *
     * @example 9999985
     *
     * @var string
     */
    public $recordId;

    /**
     * @description The IP address of the client that you use to change the weight.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The updated weight of the DNS record. Valid values: `1 to 100`.
     *
     * @example 2
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'lang'         => 'Lang',
        'recordId'     => 'RecordId',
        'userClientIp' => 'UserClientIp',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDNSSLBWeightRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
