<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS;

class pushResult extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var statusStatS
     */
    public $statusStatS;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'name' => 'Name',
        'statusStatS' => 'StatusStatS',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->statusStatS) {
            $this->statusStatS->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->statusStatS) {
            $res['StatusStatS'] = null !== $this->statusStatS ? $this->statusStatS->toArray($noStream) : $this->statusStatS;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
