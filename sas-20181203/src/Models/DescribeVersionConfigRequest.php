<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVersionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $resourceDirectoryAccountId;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'sourceIp'                   => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVersionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
