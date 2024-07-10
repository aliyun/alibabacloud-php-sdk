<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebApplicationInput extends Model
{
    /**
     * @example sae-app
     *
     * @var string
     */
    public $description;

    /**
     * @var WebNetworkConfig
     */
    public $webNetworkConfig;
    protected $_name = [
        'description'      => 'Description',
        'webNetworkConfig' => 'WebNetworkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->webNetworkConfig) {
            $res['WebNetworkConfig'] = null !== $this->webNetworkConfig ? $this->webNetworkConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebApplicationInput
     */
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
