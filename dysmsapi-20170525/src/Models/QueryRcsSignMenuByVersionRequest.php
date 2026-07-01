<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class QueryRcsSignMenuByVersionRequest extends Model
{
    /**
     * @var string
     */
    public $rcsMenuVersion;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'rcsMenuVersion' => 'RcsMenuVersion',
        'signName' => 'SignName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rcsMenuVersion) {
            $res['RcsMenuVersion'] = $this->rcsMenuVersion;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
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
        if (isset($map['RcsMenuVersion'])) {
            $model->rcsMenuVersion = $map['RcsMenuVersion'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
