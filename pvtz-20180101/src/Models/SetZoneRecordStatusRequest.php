<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class SetZoneRecordStatusRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 6447728c8578e66aacf062d2df4446dc
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the DNS record.
     *
     * This parameter is required.
     * @example 5809
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The state of the DNS record. Valid values:
     *
     *   ENABLE: enables the DNS record.
     *   DISABLE: suspends the DNS record.
     *
     * This parameter is required.
     * @example DISABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'lang'         => 'Lang',
        'recordId'     => 'RecordId',
        'status'       => 'Status',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetZoneRecordStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
