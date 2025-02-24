<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;

class clientTypeRestrictConfig extends Model
{
    /**
     * @var string[]
     */
    public $blacklistClients;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string[]
     */
    public $whitelistClients;
    protected $_name = [
        'blacklistClients' => 'BlacklistClients',
        'mode'             => 'Mode',
        'whitelistClients' => 'WhitelistClients',
    ];

    public function validate()
    {
        if (\is_array($this->blacklistClients)) {
            Model::validateArray($this->blacklistClients);
        }
        if (\is_array($this->whitelistClients)) {
            Model::validateArray($this->whitelistClients);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blacklistClients) {
            if (\is_array($this->blacklistClients)) {
                $res['BlacklistClients'] = [];
                $n1                      = 0;
                foreach ($this->blacklistClients as $item1) {
                    $res['BlacklistClients'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->whitelistClients) {
            if (\is_array($this->whitelistClients)) {
                $res['WhitelistClients'] = [];
                $n1                      = 0;
                foreach ($this->whitelistClients as $item1) {
                    $res['WhitelistClients'][$n1++] = $item1;
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
        if (isset($map['BlacklistClients'])) {
            if (!empty($map['BlacklistClients'])) {
                $model->blacklistClients = [];
                $n1                      = 0;
                foreach ($map['BlacklistClients'] as $item1) {
                    $model->blacklistClients[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['WhitelistClients'])) {
            if (!empty($map['WhitelistClients'])) {
                $model->whitelistClients = [];
                $n1                      = 0;
                foreach ($map['WhitelistClients'] as $item1) {
                    $model->whitelistClients[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
