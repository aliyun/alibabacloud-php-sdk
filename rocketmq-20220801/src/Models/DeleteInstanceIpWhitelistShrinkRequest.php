<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class DeleteInstanceIpWhitelistShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ipWhitelist;

    /**
     * @var string
     */
    public $ipWhitelistsShrink;
    protected $_name = [
        'ipWhitelist' => 'ipWhitelist',
        'ipWhitelistsShrink' => 'ipWhitelists',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipWhitelist) {
            $res['ipWhitelist'] = $this->ipWhitelist;
        }

        if (null !== $this->ipWhitelistsShrink) {
            $res['ipWhitelists'] = $this->ipWhitelistsShrink;
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
        if (isset($map['ipWhitelist'])) {
            $model->ipWhitelist = $map['ipWhitelist'];
        }

        if (isset($map['ipWhitelists'])) {
            $model->ipWhitelistsShrink = $map['ipWhitelists'];
        }

        return $model;
    }
}
