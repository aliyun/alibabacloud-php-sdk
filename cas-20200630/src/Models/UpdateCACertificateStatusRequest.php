<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UpdateCACertificateStatusRequest extends Model
{
    /**
     * @description The unique identifier of the CA certificate whose status you want to change.
     *
     * >  You can call the [DescribeCACertificateList](~~328095~~) operation to query the unique identifiers of all CA certificates.
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The state to which you want to change the CA certificate. Set to the value to **REVOKE**. After this operation is called, the status of the CA certificate is changed to **REVOKE**.
     *
     * >  You can call this operation only if the status of a CA certificate is **ISSUE**. You can call the [DescribeCACertificate](~~328096~~) operation to query the status of a CA certificate.
     * @example REVOKE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'identifier' => 'Identifier',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCACertificateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
