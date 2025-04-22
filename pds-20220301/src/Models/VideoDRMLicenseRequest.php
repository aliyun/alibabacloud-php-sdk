<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class VideoDRMLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $drmType;

    /**
     * @var string
     */
    public $licenseRequest;
    protected $_name = [
        'drmType' => 'drmType',
        'licenseRequest' => 'licenseRequest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drmType) {
            $res['drmType'] = $this->drmType;
        }

        if (null !== $this->licenseRequest) {
            $res['licenseRequest'] = $this->licenseRequest;
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
        if (isset($map['drmType'])) {
            $model->drmType = $map['drmType'];
        }

        if (isset($map['licenseRequest'])) {
            $model->licenseRequest = $map['licenseRequest'];
        }

        return $model;
    }
}
