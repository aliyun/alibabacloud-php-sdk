<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions;

class DescribeSecureSuggestionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var suggestions[]
     */
    public $suggestions;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'suggestions' => 'Suggestions',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->suggestions)) {
            Model::validateArray($this->suggestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suggestions) {
            if (\is_array($this->suggestions)) {
                $res['Suggestions'] = [];
                $n1                 = 0;
                foreach ($this->suggestions as $item1) {
                    $res['Suggestions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Suggestions'])) {
            if (!empty($map['Suggestions'])) {
                $model->suggestions = [];
                $n1                 = 0;
                foreach ($map['Suggestions'] as $item1) {
                    $model->suggestions[$n1++] = suggestions::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
