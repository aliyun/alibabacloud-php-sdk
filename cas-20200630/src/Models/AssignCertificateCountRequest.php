<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class AssignCertificateCountRequest extends Model
{
    /**
     * @var int
     */
    public $certTotalCount;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'certTotalCount' => 'CertTotalCount',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certTotalCount) {
            $res['CertTotalCount'] = $this->certTotalCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['CertTotalCount'])) {
            $model->certTotalCount = $map['CertTotalCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
