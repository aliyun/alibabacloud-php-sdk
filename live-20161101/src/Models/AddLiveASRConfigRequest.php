<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveASRConfigRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $mnsTopic;

    /**
     * @var string
     */
    public $mnsRegion;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $httpCallbackURL;
    protected $_name = [
        'domainName'      => 'DomainName',
        'appName'         => 'AppName',
        'streamName'      => 'StreamName',
        'mnsTopic'        => 'MnsTopic',
        'mnsRegion'       => 'MnsRegion',
        'period'          => 'Period',
        'httpCallbackURL' => 'HttpCallbackURL',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->mnsTopic) {
            $res['MnsTopic'] = $this->mnsTopic;
        }
        if (null !== $this->mnsRegion) {
            $res['MnsRegion'] = $this->mnsRegion;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->httpCallbackURL) {
            $res['HttpCallbackURL'] = $this->httpCallbackURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveASRConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['MnsTopic'])) {
            $model->mnsTopic = $map['MnsTopic'];
        }
        if (isset($map['MnsRegion'])) {
            $model->mnsRegion = $map['MnsRegion'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['HttpCallbackURL'])) {
            $model->httpCallbackURL = $map['HttpCallbackURL'];
        }

        return $model;
    }
}
