<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;

class clientIpRestrictConfig extends Model
{
    /**
     * @var string[]
     */
    public $blacklistFroms;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string[]
     */
    public $whitelistFroms;
    protected $_name = [
        'blacklistFroms' => 'BlacklistFroms',
        'mode'           => 'Mode',
        'whitelistFroms' => 'WhitelistFroms',
    ];

    public function validate()
    {
        if (\is_array($this->blacklistFroms)) {
            Model::validateArray($this->blacklistFroms);
        }
        if (\is_array($this->whitelistFroms)) {
            Model::validateArray($this->whitelistFroms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blacklistFroms) {
            if (\is_array($this->blacklistFroms)) {
                $res['BlacklistFroms'] = [];
                $n1                    = 0;
                foreach ($this->blacklistFroms as $item1) {
                    $res['BlacklistFroms'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->whitelistFroms) {
            if (\is_array($this->whitelistFroms)) {
                $res['WhitelistFroms'] = [];
                $n1                    = 0;
                foreach ($this->whitelistFroms as $item1) {
                    $res['WhitelistFroms'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BlacklistFroms'])) {
            if (!empty($map['BlacklistFroms'])) {
                $model->blacklistFroms = [];
                $n1                    = 0;
                foreach ($map['BlacklistFroms'] as $item1) {
                    $model->blacklistFroms[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['WhitelistFroms'])) {
            if (!empty($map['WhitelistFroms'])) {
                $model->whitelistFroms = [];
                $n1                    = 0;
                foreach ($map['WhitelistFroms'] as $item1) {
                    $model->whitelistFroms[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
