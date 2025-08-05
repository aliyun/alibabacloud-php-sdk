<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules;

use AlibabaCloud\Dara\Model;

class dataSourceFilters extends Model
{
    /**
     * @var string[]
     */
    public $dataSourceIds;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIds' => 'DataSourceIds',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceIds)) {
            Model::validateArray($this->dataSourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceIds) {
            if (\is_array($this->dataSourceIds)) {
                $res['DataSourceIds'] = [];
                $n1 = 0;
                foreach ($this->dataSourceIds as $item1) {
                    $res['DataSourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['DataSourceIds'])) {
            if (!empty($map['DataSourceIds'])) {
                $model->dataSourceIds = [];
                $n1 = 0;
                foreach ($map['DataSourceIds'] as $item1) {
                    $model->dataSourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
