<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Tea\Model;

class ldap extends Model
{
    /**
     * @var string
     */
    public $searchBase;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var string
     */
    public $bindDN;
    protected $_name = [
        'searchBase' => 'SearchBase',
        'URI'        => 'URI',
        'bindDN'     => 'BindDN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchBase) {
            $res['SearchBase'] = $this->searchBase;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->bindDN) {
            $res['BindDN'] = $this->bindDN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ldap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchBase'])) {
            $model->searchBase = $map['SearchBase'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['BindDN'])) {
            $model->bindDN = $map['BindDN'];
        }

        return $model;
    }
}
