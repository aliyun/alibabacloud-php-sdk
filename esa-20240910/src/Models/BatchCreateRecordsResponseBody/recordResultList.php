<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\failed;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\success;

class recordResultList extends Model
{
    /**
     * @var failed[]
     */
    public $failed;

    /**
     * @var success[]
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failed' => 'Failed',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->failed)) {
            Model::validateArray($this->failed);
        }
        if (\is_array($this->success)) {
            Model::validateArray($this->success);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            if (\is_array($this->failed)) {
                $res['Failed'] = [];
                $n1 = 0;
                foreach ($this->failed as $item1) {
                    $res['Failed'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            if (\is_array($this->success)) {
                $res['Success'] = [];
                $n1 = 0;
                foreach ($this->success as $item1) {
                    $res['Success'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Failed'])) {
            if (!empty($map['Failed'])) {
                $model->failed = [];
                $n1 = 0;
                foreach ($map['Failed'] as $item1) {
                    $model->failed[$n1] = failed::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            if (!empty($map['Success'])) {
                $model->success = [];
                $n1 = 0;
                foreach ($map['Success'] as $item1) {
                    $model->success[$n1] = success::fromMap($item1);
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
