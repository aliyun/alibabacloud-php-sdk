<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListListenerCertificatesRequest extends Model
{
    /**
     * @description 证书类型
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description 监听Id
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description 查询数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页查询标识
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
