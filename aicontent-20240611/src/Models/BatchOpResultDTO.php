<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BatchOpResultDTO extends Model
{
    /**
     * @var BatchFailedItemDTO[]
     */
    public $failed;

    /**
     * @var int[]
     */
    public $succeeded;
    protected $_name = [
        'failed' => 'failed',
        'succeeded' => 'succeeded',
    ];

    public function validate()
    {
        if (\is_array($this->failed)) {
            Model::validateArray($this->failed);
        }
        if (\is_array($this->succeeded)) {
            Model::validateArray($this->succeeded);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            if (\is_array($this->failed)) {
                $res['failed'] = [];
                $n1 = 0;
                foreach ($this->failed as $item1) {
                    $res['failed'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->succeeded) {
            if (\is_array($this->succeeded)) {
                $res['succeeded'] = [];
                $n1 = 0;
                foreach ($this->succeeded as $item1) {
                    $res['succeeded'][$n1] = $item1;
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
        if (isset($map['failed'])) {
            if (!empty($map['failed'])) {
                $model->failed = [];
                $n1 = 0;
                foreach ($map['failed'] as $item1) {
                    $model->failed[$n1] = BatchFailedItemDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['succeeded'])) {
            if (!empty($map['succeeded'])) {
                $model->succeeded = [];
                $n1 = 0;
                foreach ($map['succeeded'] as $item1) {
                    $model->succeeded[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
