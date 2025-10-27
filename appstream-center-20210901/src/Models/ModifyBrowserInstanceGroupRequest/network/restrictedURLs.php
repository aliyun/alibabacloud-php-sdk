<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\network;

use AlibabaCloud\Dara\Model;

class restrictedURLs extends Model
{
    /**
     * @var string
     */
    public $restrictedURLId;

    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'restrictedURLId' => 'RestrictedURLId',
        'URL' => 'URL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restrictedURLId) {
            $res['RestrictedURLId'] = $this->restrictedURLId;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['RestrictedURLId'])) {
            $model->restrictedURLId = $map['RestrictedURLId'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
