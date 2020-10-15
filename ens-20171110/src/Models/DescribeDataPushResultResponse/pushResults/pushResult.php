<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults\pushResult\statusStatS;
use AlibabaCloud\Tea\Model;

class pushResult extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;

    /**
     * @var statusStatS
     */
    public $statusStatS;
    protected $_name = [
        'name'        => 'Name',
        'version'     => 'Version',
        'statusStatS' => 'StatusStatS',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('statusStatS', $this->statusStatS, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->statusStatS) {
            $res['StatusStatS'] = null !== $this->statusStatS ? $this->statusStatS->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['StatusStatS'])) {
            $model->statusStatS = statusStatS::fromMap($map['StatusStatS']);
        }

        return $model;
    }
}
