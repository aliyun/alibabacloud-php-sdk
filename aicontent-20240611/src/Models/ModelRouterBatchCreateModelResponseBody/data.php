<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterBatchCreateModelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\BatchModelErrorDTO;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ModelDTO;

class data extends Model
{
    /**
     * @var ModelDTO[]
     */
    public $created;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var BatchModelErrorDTO[]
     */
    public $failures;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'created' => 'created',
        'failCount' => 'failCount',
        'failures' => 'failures',
        'successCount' => 'successCount',
    ];

    public function validate()
    {
        if (\is_array($this->created)) {
            Model::validateArray($this->created);
        }
        if (\is_array($this->failures)) {
            Model::validateArray($this->failures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            if (\is_array($this->created)) {
                $res['created'] = [];
                $n1 = 0;
                foreach ($this->created as $item1) {
                    $res['created'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failCount) {
            $res['failCount'] = $this->failCount;
        }

        if (null !== $this->failures) {
            if (\is_array($this->failures)) {
                $res['failures'] = [];
                $n1 = 0;
                foreach ($this->failures as $item1) {
                    $res['failures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
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
        if (isset($map['created'])) {
            if (!empty($map['created'])) {
                $model->created = [];
                $n1 = 0;
                foreach ($map['created'] as $item1) {
                    $model->created[$n1] = ModelDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['failCount'])) {
            $model->failCount = $map['failCount'];
        }

        if (isset($map['failures'])) {
            if (!empty($map['failures'])) {
                $model->failures = [];
                $n1 = 0;
                foreach ($map['failures'] as $item1) {
                    $model->failures[$n1] = BatchModelErrorDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        return $model;
    }
}
