<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetConfigResponseBody;

use AlibabaCloud\Tea\Model;

class targetConfigs extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $overAllConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config'        => 'Config',
        'overAllConfig' => 'OverAllConfig',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->overAllConfig) {
            $res['OverAllConfig'] = $this->overAllConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['OverAllConfig'])) {
            $model->overAllConfig = $map['OverAllConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
