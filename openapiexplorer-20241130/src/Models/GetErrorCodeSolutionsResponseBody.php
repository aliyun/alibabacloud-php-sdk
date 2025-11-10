<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetErrorCodeSolutionsResponseBody\solutions;

class GetErrorCodeSolutionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var solutions[]
     */
    public $solutions;
    protected $_name = [
        'requestId' => 'requestId',
        'solutions' => 'solutions',
    ];

    public function validate()
    {
        if (\is_array($this->solutions)) {
            Model::validateArray($this->solutions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->solutions) {
            if (\is_array($this->solutions)) {
                $res['solutions'] = [];
                $n1 = 0;
                foreach ($this->solutions as $item1) {
                    $res['solutions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['solutions'])) {
            if (!empty($map['solutions'])) {
                $model->solutions = [];
                $n1 = 0;
                foreach ($map['solutions'] as $item1) {
                    $model->solutions[$n1] = solutions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
