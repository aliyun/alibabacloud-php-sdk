<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestPasterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $configs;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $resourceUuid;
    protected $_name = [
        'configs'      => 'Configs',
        'downloadUrl'  => 'DownloadUrl',
        'resourceUuid' => 'ResourceUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->resourceUuid) {
            $res['ResourceUuid'] = $this->resourceUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ResourceUuid'])) {
            $model->resourceUuid = $map['ResourceUuid'];
        }

        return $model;
    }
}
