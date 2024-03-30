<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups;

use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @description The engine version.
     *
     * @example 5.0
     *
     * @var string
     */
    public $custinsDbVersion;
    protected $_name = [
        'custinsDbVersion' => 'CustinsDbVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custinsDbVersion) {
            $res['CustinsDbVersion'] = $this->custinsDbVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustinsDbVersion'])) {
            $model->custinsDbVersion = $map['CustinsDbVersion'];
        }

        return $model;
    }
}
