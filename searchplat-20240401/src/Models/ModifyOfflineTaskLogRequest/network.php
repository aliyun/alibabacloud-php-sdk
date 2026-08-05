<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogRequest\network\privateEs;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogRequest\network\publicEs;

class network extends Model
{
    /**
     * @var privateEs
     */
    public $privateEs;

    /**
     * @var publicEs
     */
    public $publicEs;
    protected $_name = [
        'privateEs' => 'privateEs',
        'publicEs' => 'publicEs',
    ];

    public function validate()
    {
        if (null !== $this->privateEs) {
            $this->privateEs->validate();
        }
        if (null !== $this->publicEs) {
            $this->publicEs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateEs) {
            $res['privateEs'] = null !== $this->privateEs ? $this->privateEs->toArray($noStream) : $this->privateEs;
        }

        if (null !== $this->publicEs) {
            $res['publicEs'] = null !== $this->publicEs ? $this->publicEs->toArray($noStream) : $this->publicEs;
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
        if (isset($map['privateEs'])) {
            $model->privateEs = privateEs::fromMap($map['privateEs']);
        }

        if (isset($map['publicEs'])) {
            $model->publicEs = publicEs::fromMap($map['publicEs']);
        }

        return $model;
    }
}
