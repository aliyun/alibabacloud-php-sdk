<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveLazyPullStreamConfigRequest extends Model
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
    public $liveapiRequestFrom;
    protected $_name = [
        'domainName'         => 'DomainName',
        'appName'            => 'AppName',
        'liveapiRequestFrom' => 'LiveapiRequestFrom',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
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
        if (null !== $this->liveapiRequestFrom) {
            $res['LiveapiRequestFrom'] = $this->liveapiRequestFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveLazyPullStreamConfigRequest
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
        if (isset($map['LiveapiRequestFrom'])) {
            $model->liveapiRequestFrom = $map['LiveapiRequestFrom'];
        }

        return $model;
    }
}
