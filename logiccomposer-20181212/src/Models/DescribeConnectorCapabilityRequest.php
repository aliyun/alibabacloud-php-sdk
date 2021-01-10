<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeConnectorCapabilityRequest extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $preset;
    protected $_name = [
        'type'   => 'Type',
        'lang'   => 'Lang',
        'preset' => 'Preset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->preset) {
            $res['Preset'] = $this->preset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectorCapabilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Preset'])) {
            $model->preset = $map['Preset'];
        }

        return $model;
    }
}
