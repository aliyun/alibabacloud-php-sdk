<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpdateSmsQualificationRequest;

use AlibabaCloud\Dara\Model;

class businessLicensePics extends Model
{
    /**
     * @var string
     */
    public $licensePic;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'licensePic' => 'LicensePic',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->licensePic) {
            $res['LicensePic'] = $this->licensePic;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['LicensePic'])) {
            $model->licensePic = $map['LicensePic'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
