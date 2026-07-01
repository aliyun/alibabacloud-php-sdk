<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData;

class pageResult extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var resultData[]
     */
    public $resultData;
    protected $_name = [
        'count' => 'Count',
        'resultData' => 'ResultData',
    ];

    public function validate()
    {
        if (\is_array($this->resultData)) {
            Model::validateArray($this->resultData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->resultData) {
            if (\is_array($this->resultData)) {
                $res['ResultData'] = [];
                $n1 = 0;
                foreach ($this->resultData as $item1) {
                    $res['ResultData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['ResultData'])) {
            if (!empty($map['ResultData'])) {
                $model->resultData = [];
                $n1 = 0;
                foreach ($map['ResultData'] as $item1) {
                    $model->resultData[$n1] = resultData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
