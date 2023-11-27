<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commonConfig
     */
    public $commonConfig;
    protected $_name = [
        'commonConfig' => 'CommonConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonConfig) {
            $res['CommonConfig'] = null !== $this->commonConfig ? $this->commonConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonConfig'])) {
            $model->commonConfig = commonConfig::fromMap($map['CommonConfig']);
        }

        return $model;
    }
}
