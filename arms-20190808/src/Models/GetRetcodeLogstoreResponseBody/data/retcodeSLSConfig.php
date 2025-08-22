<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreResponseBody\data;

use AlibabaCloud\Dara\Model;

class retcodeSLSConfig extends Model
{
    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logstore' => 'Logstore',
        'project' => 'Project',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
