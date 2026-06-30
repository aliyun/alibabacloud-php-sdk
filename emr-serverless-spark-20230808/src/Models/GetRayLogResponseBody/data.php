<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessUrl;
    protected $_name = [
        'accessUrl' => 'accessUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessUrl) {
            $res['accessUrl'] = $this->accessUrl;
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
        if (isset($map['accessUrl'])) {
            $model->accessUrl = $map['accessUrl'];
        }

        return $model;
    }
}
