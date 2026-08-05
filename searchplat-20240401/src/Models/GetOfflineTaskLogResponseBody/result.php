<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\GetOfflineTaskLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetOfflineTaskLogResponseBody\result\network;

class result extends Model
{
    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'network' => 'network',
    ];

    public function validate()
    {
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
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
        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }

        return $model;
    }
}
