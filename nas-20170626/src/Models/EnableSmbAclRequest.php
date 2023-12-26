<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class EnableSmbAclRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The string that is generated after the system encodes the keytab file by using Base64.
     *
     * @example BQIAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAQAIqIx6v7p11oUAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAwAIqIx6v7p11oUAAABPAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAFwAQnQZWB3RAPHU7PMIJyBWePAAAAF8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQASACAGJ7F0s+bcBjf6jD5HlvlRLmPSOW+qDZe0Qk0lQcf8WwAAAE8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQARABDdFmanrSIatnDDhxxxxx
     *
     * @var string
     */
    public $keytab;

    /**
     * @description The string that is generated after the system encodes the keytab file by using MD5.
     *
     * @example E3CCF7E2416DF04FA958AA4513EAxxxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return EnableSmbAclRequest
     */
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
