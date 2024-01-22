<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigMapResponseBody\data;

use AlibabaCloud\Tea\Model;

class relateApps extends Model
{
    /**
     * @description The ID of the ConfigMap instance.
     *
     * @example f16b4000-9058-4c22-a49d-49a28f0b****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the application.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relateApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        return $model;
    }
}
