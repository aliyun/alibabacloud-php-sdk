<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class EnableSmbAclRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $keytab;
    /**
     * @var string
     */
    public $keytabMd5;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'keytab'       => 'Keytab',
        'keytabMd5'    => 'KeytabMd5',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->keytab) {
            $res['Keytab'] = $this->keytab;
        }

        if (null !== $this->keytabMd5) {
            $res['KeytabMd5'] = $this->keytabMd5;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Keytab'])) {
            $model->keytab = $map['Keytab'];
        }

        if (isset($map['KeytabMd5'])) {
            $model->keytabMd5 = $map['KeytabMd5'];
        }

        return $model;
    }
}
