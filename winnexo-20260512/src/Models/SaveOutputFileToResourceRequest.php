<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SaveOutputFileToResourceRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string[]
     */
    public $itemIds;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'directoryId' => 'directoryId',
        'itemIds' => 'itemIds',
        'mode' => 'mode',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->itemIds)) {
            Model::validateArray($this->itemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->itemIds) {
            if (\is_array($this->itemIds)) {
                $res['itemIds'] = [];
                $n1 = 0;
                foreach ($this->itemIds as $item1) {
                    $res['itemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['itemIds'])) {
            if (!empty($map['itemIds'])) {
                $model->itemIds = [];
                $n1 = 0;
                foreach ($map['itemIds'] as $item1) {
                    $model->itemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
