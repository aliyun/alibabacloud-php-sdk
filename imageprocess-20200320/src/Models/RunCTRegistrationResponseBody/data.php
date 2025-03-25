<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $DUrl;

    /**
     * @var string
     */
    public $NUrl;
    protected $_name = [
        'DUrl' => 'DUrl',
        'NUrl' => 'NUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DUrl) {
            $res['DUrl'] = $this->DUrl;
        }

        if (null !== $this->NUrl) {
            $res['NUrl'] = $this->NUrl;
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
        if (isset($map['DUrl'])) {
            $model->DUrl = $map['DUrl'];
        }

        if (isset($map['NUrl'])) {
            $model->NUrl = $map['NUrl'];
        }

        return $model;
    }
}
