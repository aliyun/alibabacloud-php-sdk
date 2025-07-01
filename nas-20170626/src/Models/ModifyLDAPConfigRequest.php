<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class ModifyLDAPConfigRequest extends Model
{
    /**
     * @var string
     */
    public $bindDN;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $searchBase;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'bindDN' => 'BindDN',
        'fileSystemId' => 'FileSystemId',
        'searchBase' => 'SearchBase',
        'URI' => 'URI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
