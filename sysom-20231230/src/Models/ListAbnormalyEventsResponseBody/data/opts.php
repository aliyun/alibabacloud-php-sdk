<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data;

use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data\opts\result;
use AlibabaCloud\Tea\Model;

class opts extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'label' => 'label',
        'result' => 'result',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
