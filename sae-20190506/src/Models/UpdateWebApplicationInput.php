<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateWebApplicationInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var WebNetworkConfig
     */
    public $webNetworkConfig;
    protected $_name = [
        'description' => 'Description',
        'webNetworkConfig' => 'WebNetworkConfig',
    ];

    public function validate()
    {
        if (null !== $this->webNetworkConfig) {
            $this->webNetworkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->webNetworkConfig) {
            $res['WebNetworkConfig'] = null !== $this->webNetworkConfig ? $this->webNetworkConfig->toArray($noStream) : $this->webNetworkConfig;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['WebNetworkConfig'])) {
            $model->webNetworkConfig = WebNetworkConfig::fromMap($map['WebNetworkConfig']);
        }

        return $model;
    }
}
