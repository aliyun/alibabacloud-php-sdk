<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListWebCustomDomainsRequest extends Model
{
    /**
     * @description The application ID.
     *
     * @example 7e41aff0-9eca-45c9-ac48-675e09******
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The number of custom domain names returned.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The namespace ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The pagination token.
     *
     * @example A2RN
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The prefix of the custom domain name that you want to query.
     *
     * @example remoteresult
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'limit' => 'Limit',
        'namespaceId' => 'NamespaceId',
        'nextToken' => 'NextToken',
        'prefix' => 'Prefix',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebCustomDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
