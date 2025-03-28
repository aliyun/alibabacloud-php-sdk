<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesResponseBody\result;

use AlibabaCloud\Tea\Model;

class DCV extends Model
{
    /**
     * @description The DCV ID.
     *
     * @example bababf7cdd1546a2ad04c0def1f4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The DCV name. It is a TXT record name if Type is DNS or URL if Type is HTTP.
     *
     * @example http://www.example.com/.well-known/acme-challenge/pH20CqwS5L3ZnvkhI436DCzadKFuG7QcUcvB_4KsAow
     *
     * @var string
     */
    public $key;

    /**
     * @description The verification status.
     *
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The DCV type. Valid values: DNS and HTTP.
     *
     * @example HTTP
     *
     * @var string
     */
    public $type;

    /**
     * @description The DCV content.
     *
     * @example pH20CqwS5L3ZnvkhI436DCzadKFuG7QcUcvB_4KsAow.KfzYo4LH3EgOt7a73G-RqZkbR0eYtLfEUmtmqGmr4FQ
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'id' => 'Id',
        'key' => 'Key',
        'status' => 'Status',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DCV
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
