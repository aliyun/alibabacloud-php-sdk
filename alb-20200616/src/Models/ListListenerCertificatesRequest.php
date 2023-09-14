<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListListenerCertificatesRequest extends Model
{
    /**
     * @description The type of the certificate. Valid values: **Ca** and **Server**.
     *
     * @example Server
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description The listener ID. You must specify the ID of an HTTPS listener or a QUIC listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The maximum number of entries to return. Valid values: **1 to 100**. If you do not specify this parameter, the default value **20** is used.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'certificateType' => 'CertificateType',
        'listenerId'      => 'ListenerId',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListListenerCertificatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
