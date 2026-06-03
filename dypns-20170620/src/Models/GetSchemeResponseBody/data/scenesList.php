<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\GetSchemeResponseBody\data;

use AlibabaCloud\Dara\Model;

class scenesList extends Model
{
    /**
     * @var int
     */
    public $scenesId;

    /**
     * @var string
     */
    public $scenesName;
    protected $_name = [
        'scenesId' => 'ScenesId',
        'scenesName' => 'ScenesName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenesId) {
            $res['ScenesId'] = $this->scenesId;
        }

        if (null !== $this->scenesName) {
            $res['ScenesName'] = $this->scenesName;
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
        if (isset($map['ScenesId'])) {
            $model->scenesId = $map['ScenesId'];
        }

        if (isset($map['ScenesName'])) {
            $model->scenesName = $map['ScenesName'];
        }

        return $model;
    }
}
