<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class OpenAckServiceRequest extends Model
{
    /**
     * @description The type of service that you want to activate. Valid values:
     *
     *   `propayasgo`: ACK clusters (including ACK managed clusters and ACK dedicated clusters), ACK Serverless clusters, and registered clusters.
     *   `edgepayasgo`: ACK Edge clusters.
     *
     * @example propayasgo
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenAckServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
