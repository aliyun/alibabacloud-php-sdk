<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody;

use AlibabaCloud\Tea\Model;

class liveMaterials extends Model
{
    /**
     * @description The application name of the live stream.
     *
     * @example testrecord
     *
     * @var string
     */
    public $appName;

    /**
     * @description The domain name of the live stream.
     *
     * @example test.alivecdn.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The URL of the live stream.
     *
     * @example rtmp://test.alivecdn.com/testrecord/teststream
     *
     * @var string
     */
    public $liveUrl;

    /**
     * @description The name of the live stream.
     *
     * @example teststream
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'    => 'AppName',
        'domainName' => 'DomainName',
        'liveUrl'    => 'LiveUrl',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveMaterials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
