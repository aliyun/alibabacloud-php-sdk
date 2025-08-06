<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel;

class DescribeSystemPropertyTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var systemPropertyTemplateModel[]
     */
    public $systemPropertyTemplateModel;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'systemPropertyTemplateModel' => 'SystemPropertyTemplateModel',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->systemPropertyTemplateModel)) {
            Model::validateArray($this->systemPropertyTemplateModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemPropertyTemplateModel) {
            if (\is_array($this->systemPropertyTemplateModel)) {
                $res['SystemPropertyTemplateModel'] = [];
                $n1 = 0;
                foreach ($this->systemPropertyTemplateModel as $item1) {
                    $res['SystemPropertyTemplateModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SystemPropertyTemplateModel'])) {
            if (!empty($map['SystemPropertyTemplateModel'])) {
                $model->systemPropertyTemplateModel = [];
                $n1 = 0;
                foreach ($map['SystemPropertyTemplateModel'] as $item1) {
                    $model->systemPropertyTemplateModel[$n1] = systemPropertyTemplateModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
