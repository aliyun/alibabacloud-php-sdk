<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBVersionInfosResponseBody;

use AlibabaCloud\Dara\Model;

class versionDetails extends Model
{
    /**
     * @var mixed
     */
    public $serverless;

    /**
     * @var mixed
     */
    public $storageElastic;
    protected $_name = [
        'serverless' => 'Serverless',
        'storageElastic' => 'StorageElastic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serverless) {
            $res['Serverless'] = $this->serverless;
        }

        if (null !== $this->storageElastic) {
            $res['StorageElastic'] = $this->storageElastic;
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
        if (isset($map['Serverless'])) {
            $model->serverless = $map['Serverless'];
        }

        if (isset($map['StorageElastic'])) {
            $model->storageElastic = $map['StorageElastic'];
        }

        return $model;
    }
}
