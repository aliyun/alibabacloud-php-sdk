<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyLDAPConfigRequest extends Model
{
    /**
     * @description The LDAP entry.
     *
     * @example cn=alibaba,dc=com
     *
     * @var string
     */
    public $bindDN;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example 109c042666
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The LDAP search base.
     *
     * This parameter is required.
     *
     * @example dc=example
     *
     * @var string
     */
    public $searchBase;

    /**
     * @description The LDAP service address.
     *
     * This parameter is required.
     *
     * @example ldap://ldap.example.example
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'bindDN' => 'BindDN',
        'fileSystemId' => 'FileSystemId',
        'searchBase' => 'SearchBase',
        'URI' => 'URI',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindDN) {
            $res['BindDN'] = $this->bindDN;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->searchBase) {
            $res['SearchBase'] = $this->searchBase;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLDAPConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindDN'])) {
            $model->bindDN = $map['BindDN'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['SearchBase'])) {
            $model->searchBase = $map['SearchBase'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
