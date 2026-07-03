<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponseBody\listResponseRuleFields;

class ListResponseRuleFieldsResponseBody extends Model
{
    /**
     * @var listResponseRuleFields[]
     */
    public $listResponseRuleFields;

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
        'listResponseRuleFields' => 'ListResponseRuleFields',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->listResponseRuleFields)) {
            Model::validateArray($this->listResponseRuleFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listResponseRuleFields) {
            if (\is_array($this->listResponseRuleFields)) {
                $res['ListResponseRuleFields'] = [];
                $n1 = 0;
                foreach ($this->listResponseRuleFields as $item1) {
                    $res['ListResponseRuleFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ListResponseRuleFields'])) {
            if (!empty($map['ListResponseRuleFields'])) {
                $model->listResponseRuleFields = [];
                $n1 = 0;
                foreach ($map['ListResponseRuleFields'] as $item1) {
                    $model->listResponseRuleFields[$n1] = listResponseRuleFields::fromMap($item1);
                    ++$n1;
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
