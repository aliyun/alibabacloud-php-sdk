<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseRequest\options;
use AlibabaCloud\Tea\Model;

class GetEnvironmentLicenseRequest extends Model
{
    /**
     * @var options
     */
    public $options;
    protected $_name = [
        'options' => 'options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnvironmentLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['options'])) {
            $model->options = options::fromMap($map['options']);
        }

        return $model;
    }
}
