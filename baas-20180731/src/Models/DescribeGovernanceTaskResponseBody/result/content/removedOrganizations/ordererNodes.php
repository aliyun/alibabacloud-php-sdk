<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTaskResponseBody\result\content\removedOrganizations;

use AlibabaCloud\Tea\Model;

class ordererNodes extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $tlsroot;
    protected $_name = [
        'address'     => 'Address',
        'certificate' => 'Certificate',
        'key'         => 'Key',
        'tlsroot'     => 'Tlsroot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->tlsroot) {
            $res['Tlsroot'] = $this->tlsroot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ordererNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Tlsroot'])) {
            $model->tlsroot = $map['Tlsroot'];
        }

        return $model;
    }
}
