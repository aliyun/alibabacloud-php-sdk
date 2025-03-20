<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ApplyCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Certificate domain.
     *
     * @example *.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Certificate ID.
     *
     * @example 30000478
     *
     * @var string
     */
    public $id;

    /**
     * @description Status of the certificate application.
     *
     * @example Applying
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'domain' => 'Domain',
        'id' => 'Id',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
