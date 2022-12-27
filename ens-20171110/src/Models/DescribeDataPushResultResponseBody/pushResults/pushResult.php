<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS;
use AlibabaCloud\Tea\Model;

class pushResult extends Model
{
    /**
     * @example gcs-pre-websocket-eip-telecom
     *
     * @var string
     */
    public $name;

    /**
     * @var statusStatS
     */
    public $statusStatS;

    /**
     * @example standard
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'        => 'Name',
        'statusStatS' => 'StatusStatS',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->statusStatS) {
            $res['StatusStatS'] = null !== $this->statusStatS ? $this->statusStatS->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['StatusStatS'])) {
            $model->statusStatS = statusStatS::fromMap($map['StatusStatS']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
