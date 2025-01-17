<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody;

use AlibabaCloud\Dara\Model;

class liveMaterials extends Model
{
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string
     */
    public $liveUrl;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
