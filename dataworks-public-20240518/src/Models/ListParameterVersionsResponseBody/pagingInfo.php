<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListParameterVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListParameterVersionsResponseBody\pagingInfo\parameterVersion;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var parameterVersion[]
     */
    public $parameterVersion;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parameterVersion' => 'ParameterVersion',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->parameterVersion)) {
            Model::validateArray($this->parameterVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->parameterVersion) {
            if (\is_array($this->parameterVersion)) {
                $res['ParameterVersion'] = [];
                $n1 = 0;
                foreach ($this->parameterVersion as $item1) {
                    $res['ParameterVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParameterVersion'])) {
            if (!empty($map['ParameterVersion'])) {
                $model->parameterVersion = [];
                $n1 = 0;
                foreach ($map['ParameterVersion'] as $item1) {
                    $model->parameterVersion[$n1] = parameterVersion::fromMap($item1);
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
