<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages;

use AlibabaCloud\Dara\Model;

class updateDataModel extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $surfaceId;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'path' => 'path',
        'surfaceId' => 'surfaceId',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->surfaceId) {
            $res['surfaceId'] = $this->surfaceId;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['surfaceId'])) {
            $model->surfaceId = $map['surfaceId'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
