<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class entryApplication extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 406073bf-afc2-4142-b3d7-629a0308****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example java-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The data source. Set the value to EDAS.
     *
     * @example EDAS
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
        'source'  => 'Source',
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entryApplication
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
