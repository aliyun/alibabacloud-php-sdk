<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;

use AlibabaCloud\Tea\Model;

class userMeta extends Model
{
    /**
     * @var string
     */
    public $adDomain;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'adDomain' => 'AdDomain',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
