<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $environmentUID;

    /**
     * @var string
     */
    public $vendorConfig;
    protected $_name = [
        'environmentUID' => 'environmentUID',
        'vendorConfig'   => 'vendorConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->vendorConfig) {
            $res['vendorConfig'] = $this->vendorConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['vendorConfig'])) {
            $model->vendorConfig = $map['vendorConfig'];
        }

        return $model;
    }
}
