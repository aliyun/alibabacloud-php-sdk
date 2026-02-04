<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetWebAuthnConfigurationRequest;

use AlibabaCloud\Dara\Model;

class aaguids extends Model
{
    /**
     * @var string
     */
    public $aaguid;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'aaguid' => 'Aaguid',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aaguid) {
            $res['Aaguid'] = $this->aaguid;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Aaguid'])) {
            $model->aaguid = $map['Aaguid'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
