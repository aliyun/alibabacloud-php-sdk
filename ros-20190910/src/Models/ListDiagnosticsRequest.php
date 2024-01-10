<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListDiagnosticsRequest extends Model
{
    /**
     * @description The keyword in the diagnosis.
     *
     * @example 2829A772-B154-5A0A-B61B-DEE8A9EE8A5D
     *
     * @var string
     */
    public $diagnosticKey;

    /**
     * @description The product that is diagnosed.
     *
     * @example ros
     *
     * @var string
     */
    public $diagnosticProduct;

    /**
     * @description The maximum number of results to be returned in a single call when NextToken is used for the query.
     *
     * Default value: 50.
     * @example 50
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f01****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The diagnosis status.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'diagnosticKey'     => 'DiagnosticKey',
        'diagnosticProduct' => 'DiagnosticProduct',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosticKey) {
            $res['DiagnosticKey'] = $this->diagnosticKey;
        }
        if (null !== $this->diagnosticProduct) {
            $res['DiagnosticProduct'] = $this->diagnosticProduct;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnosticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosticKey'])) {
            $model->diagnosticKey = $map['DiagnosticKey'];
        }
        if (isset($map['DiagnosticProduct'])) {
            $model->diagnosticProduct = $map['DiagnosticProduct'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
