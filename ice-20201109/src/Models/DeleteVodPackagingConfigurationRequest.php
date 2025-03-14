<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteVodPackagingConfigurationRequest extends Model
{
    /**
     * @description The name of the packaging configuration.
     *
     * @example hls_3s
     *
     * @var string
     */
    public $configurationName;
    protected $_name = [
        'configurationName' => 'ConfigurationName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationName) {
            $res['ConfigurationName'] = $this->configurationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVodPackagingConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationName'])) {
            $model->configurationName = $map['ConfigurationName'];
        }

        return $model;
    }
}
