<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseRequest;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $withSecretYAML;
    protected $_name = [
        'withSecretYAML' => 'withSecretYAML',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withSecretYAML) {
            $res['withSecretYAML'] = $this->withSecretYAML;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withSecretYAML'])) {
            $model->withSecretYAML = $map['withSecretYAML'];
        }

        return $model;
    }
}
