<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The ID of the SSL certificate.
     *
     * @example 44983xxxx-cn-hangzhou
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the certificate.
     *
     * Only **Server** can be returned, which indicates a server certificate.
     * @example Server
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'   => 'Id',
        'type' => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
