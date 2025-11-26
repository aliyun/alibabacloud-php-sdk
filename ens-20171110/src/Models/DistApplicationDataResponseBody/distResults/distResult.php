<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponseBody\distResults;

use AlibabaCloud\Dara\Model;

class distResult extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultDescrip;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'name' => 'Name',
        'resultCode' => 'ResultCode',
        'resultDescrip' => 'ResultDescrip',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->resultDescrip) {
            $res['ResultDescrip'] = $this->resultDescrip;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['ResultDescrip'])) {
            $model->resultDescrip = $map['ResultDescrip'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
