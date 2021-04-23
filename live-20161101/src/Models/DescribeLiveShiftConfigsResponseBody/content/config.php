<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveShiftConfigsResponseBody\content;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $vision;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'appName'    => 'AppName',
        'vision'     => 'Vision',
        'streamName' => 'StreamName',
        'domainName' => 'DomainName',
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
        if (null !== $this->vision) {
            $res['Vision'] = $this->vision;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Vision'])) {
            $model->vision = $map['Vision'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
