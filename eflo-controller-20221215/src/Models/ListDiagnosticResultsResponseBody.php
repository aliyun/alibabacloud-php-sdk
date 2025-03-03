<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponseBody\diagnosticResults;

class ListDiagnosticResultsResponseBody extends Model
{
    /**
     * @var diagnosticResults[]
     */
    public $diagnosticResults;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosticResults' => 'DiagnosticResults',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosticResults)) {
            Model::validateArray($this->diagnosticResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosticResults) {
            if (\is_array($this->diagnosticResults)) {
                $res['DiagnosticResults'] = [];
                $n1                       = 0;
                foreach ($this->diagnosticResults as $item1) {
                    $res['DiagnosticResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosticResults'])) {
            if (!empty($map['DiagnosticResults'])) {
                $model->diagnosticResults = [];
                $n1                       = 0;
                foreach ($map['DiagnosticResults'] as $item1) {
                    $model->diagnosticResults[$n1++] = diagnosticResults::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
