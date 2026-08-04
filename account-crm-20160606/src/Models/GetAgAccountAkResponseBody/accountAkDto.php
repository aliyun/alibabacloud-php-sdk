<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetAgAccountAkResponseBody;

use AlibabaCloud\Dara\Model;

class accountAkDto extends Model
{
    /**
     * @var string
     */
    public $ak;

    /**
     * @var string
     */
    public $secret;
    protected $_name = [
        'ak' => 'Ak',
        'secret' => 'Secret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ak) {
            $res['Ak'] = $this->ak;
        }

        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
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
        if (isset($map['Ak'])) {
            $model->ak = $map['Ak'];
        }

        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }

        return $model;
    }
}
