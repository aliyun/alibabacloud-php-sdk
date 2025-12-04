<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms;

use AlibabaCloud\Dara\Model;

class eapConfig extends Model
{
    /**
     * @var string
     */
    public $webserverAddress;

    /**
     * @var string
     */
    public $webserverSpecName;
    protected $_name = [
        'webserverAddress' => 'WebserverAddress',
        'webserverSpecName' => 'WebserverSpecName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webserverAddress) {
            $res['WebserverAddress'] = $this->webserverAddress;
        }

        if (null !== $this->webserverSpecName) {
            $res['WebserverSpecName'] = $this->webserverSpecName;
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
        if (isset($map['WebserverAddress'])) {
            $model->webserverAddress = $map['WebserverAddress'];
        }

        if (isset($map['WebserverSpecName'])) {
            $model->webserverSpecName = $map['WebserverSpecName'];
        }

        return $model;
    }
}
