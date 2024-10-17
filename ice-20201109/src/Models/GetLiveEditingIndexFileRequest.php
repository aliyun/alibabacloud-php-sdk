<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetLiveEditingIndexFileRequest extends Model
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
     * @description The ID of the live stream editing project.
     *
     * @example *****cb6307a4edea614d8b3f3c*****
     *
     * @var string
     */
    public $projectId;

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
        'projectId'  => 'ProjectId',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveEditingIndexFileRequest
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
