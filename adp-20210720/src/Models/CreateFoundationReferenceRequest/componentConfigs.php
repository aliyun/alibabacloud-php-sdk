<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateFoundationReferenceRequest;

use AlibabaCloud\Tea\Model;

class componentConfigs extends Model
{
    /**
     * @var string
     */
    public $componentVersionUID;

    /**
     * @var string
     */
    public $orchestrationValues;
    protected $_name = [
        'componentVersionUID' => 'componentVersionUID',
        'orchestrationValues' => 'orchestrationValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentVersionUID) {
            $res['componentVersionUID'] = $this->componentVersionUID;
        }
        if (null !== $this->orchestrationValues) {
            $res['orchestrationValues'] = $this->orchestrationValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentVersionUID'])) {
            $model->componentVersionUID = $map['componentVersionUID'];
        }
        if (isset($map['orchestrationValues'])) {
            $model->orchestrationValues = $map['orchestrationValues'];
        }

        return $model;
    }
}
