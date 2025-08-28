<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups;

use AlibabaCloud\Dara\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $custinsDbVersion;
    protected $_name = [
        'custinsDbVersion' => 'CustinsDbVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custinsDbVersion) {
            $res['CustinsDbVersion'] = $this->custinsDbVersion;
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
        if (isset($map['CustinsDbVersion'])) {
            $model->custinsDbVersion = $map['CustinsDbVersion'];
        }

        return $model;
    }
}
