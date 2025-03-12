<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebPathRequest extends Model
{
    /**
     * @description The configuration of the web directory. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **webPathType**: the type of the web directory
     *   **webPath**: the web directory
     *
     * @example {
     * "webPathType": "customize",
     * "webPath": "/root/www****"
     * }
     * @var string
     */
    public $config;

    /**
     * @description The protected asset to which the web directory belongs. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **target**: the protected asset.
     *   **targetType**: the type of the asset. Set the value to uuid.
     *   **flag**: the type of the operation.
     *
     * @example [{"target":"0186127a-d33e-4d0c-94fb-8f25f87bc69f","targetType":"uuid","flag":"add"}]
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the configuration item. Set the value to **web_path**.
     *
     * @example web_path
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'target' => 'Target',
        'type'   => 'Type',
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
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
