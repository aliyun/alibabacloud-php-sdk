<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulConfigResponseBody;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
