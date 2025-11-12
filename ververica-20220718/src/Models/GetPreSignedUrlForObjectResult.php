<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class GetPreSignedUrlForObjectResult extends Model
{
    /**
     * @var string
     */
    public $jarUrl;

    /**
     * @var string
     */
    public $preSignedUrl;
    protected $_name = [
        'jarUrl' => 'jarUrl',
        'preSignedUrl' => 'preSignedUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jarUrl) {
            $res['jarUrl'] = $this->jarUrl;
        }

        if (null !== $this->preSignedUrl) {
            $res['preSignedUrl'] = $this->preSignedUrl;
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
        if (isset($map['jarUrl'])) {
            $model->jarUrl = $map['jarUrl'];
        }

        if (isset($map['preSignedUrl'])) {
            $model->preSignedUrl = $map['preSignedUrl'];
        }

        return $model;
    }
}
