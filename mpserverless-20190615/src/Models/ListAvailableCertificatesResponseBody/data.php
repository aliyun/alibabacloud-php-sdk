<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListAvailableCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3969858
     *
     * @var string
     */
    public $id;

    /**
     * @example testCert
     *
     * @var string
     */
    public $name;

    /**
     * @example ISSUED
     *
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'id'         => 'Id',
        'name'       => 'Name',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
