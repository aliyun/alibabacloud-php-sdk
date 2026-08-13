<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SaveOutputFileToResourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $itemIdsShrink;

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
        'itemIdsShrink' => 'itemIds',
        'mode' => 'mode',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->itemIdsShrink) {
            $res['itemIds'] = $this->itemIdsShrink;
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
            $model->itemIdsShrink = $map['itemIds'];
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
