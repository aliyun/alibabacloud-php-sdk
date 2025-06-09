<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListAgentInstanceConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'configType' => 'configType',
        'offset' => 'offset',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
